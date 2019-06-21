const settings = {
	clean: true,
	scripts: true,
	polyfills: true,
	styles: true,
	svgs: true,
	copy: true,
	reload: true
};

const paths = {
	input: "src/",
	output: "public/",
	scripts: {
		input: "src/js/*",
		polyfills: ".polyfill.js",
		output: "public/js/"
	},
	styles: {
		input: "src/sass/main.sass",
		output: "public/css/"
	},
	svgs: {
		input: "src/svg/*.svg",
		output: "public/svg/"
	},
	copy: {
		input: "src/**/*.{php,css,png,jpg,pdf,xml,ico,json,svg}",
		output: "public/"
	},
	reload: "./public"
};

const {gulp, src, dest, watch, series, parallel} = require("gulp");
const del = require("del");
const flatmap = require("gulp-flatmap");
const lazypipe = require("lazypipe");

// Scripts
const concat = require("gulp-concat");
const uglify = require("gulp-terser");

// Styles
const sass = require("gulp-sass");
const prefix = require("gulp-autoprefixer");
const minify = require("gulp-cssnano");

// SVGs
const svgmin = require("gulp-svgmin");

// BrowserSync
const bs = require("browser-sync").create();
const php = require("gulp-connect-php");

// Remove pre-existing content from output folders
const cleanDist = function (done) {
	if(!settings.clean) return done();

	del.sync([ paths.output ]);

	return done();
};

// Repeated JavaScript tasks
const jsTasks = lazypipe()
	.pipe(uglify)
	.pipe(dest, paths.scripts.output);

// Minify and concatenate scripts
const buildScripts = function (done) {
	if(!settings.scripts) return done();

	return src(paths.scripts.input)
		.pipe(flatmap(function(stream, file) {

			if(file.isDirectory()) {
				let suffix = "";

				if(settings.polyfills) {
					suffix = ".polyfills";

					src([file.path + "/*.js", "!" + file.path + "/*" + paths.scripts.polyfills])
						.pipe(concat(file.relative + ".js"))
						.pipe(jsTasks());
				}

				src(file.path + "/*.js")
					.pipe(concat(file.relative + suffix + ".js"))
					.pipe(jsTasks());

				return stream;
			}

			return stream.pipe(jsTasks());
		}));
};

// Process and minify Sass files
const buildStyles = function (done) {
	if(!settings.styles) return done();

	return src(paths.styles.input)
		.pipe(sass({ outputStyle: "compressed" }))
		.pipe(prefix({
			browsers: ["last 2 version", "> 0.25%"],
			cascade: true,
			remove: true
		}))
		.pipe(minify({
			discardComments: {
				removeAll: true
			}
		}))
		.pipe(dest(paths.styles.output));
};

// Optimize SVG files
const buildSVGs = function (done) {
	if(!settings.svgs) return done();

	return src(paths.svgs.input)
		.pipe(svgmin())
		.pipe(dest(paths.svgs.output));
};

// Copy static files into output folder
const copyFiles = function (done) {
	if(!settings.copy) return done();

	return src(paths.copy.input)
		.pipe(dest(paths.copy.output));
};

// Watch for changes to the src directory
const startServer = function (done) {
	if(!settings.reload) return done();

	php.server({
		base: "./public",
		port: 8000
	});

	bs.init({
		baseDir: "./public",
		notify: false,
		port: 8000,
		proxy: "localhost:8000"
	});

	done();
};

// Reload the browser when files change
const reloadBrowser = function (done) {
	if(!settings.reload) return done();

	browserSync.reload();

	done();
};

// Watch for changes
const watchSource = function (done) {
	watch(paths.input, series(exports.default, reloadBrowser));

	done();
};

// Default task
exports.default = series(
	cleanDist,
	parallel(
		buildScripts,
		buildStyles,
		buildSVGs,
		copyFiles
	)
);

// gulp watch
exports.watch = series(
	exports.default,
	startServer,
	watchSource
);