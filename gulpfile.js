const { gulp, src, dest, watch, series, parallel } = require("gulp");
const del = require("del");
const sass = require("gulp-sass");
const prefix = require("gulp-autoprefixer");
const minify = require("gulp-cssnano");
const concat = require("gulp-concat");
const uglify = require("gulp-terser");
const svgmin = require("gulp-svgmin");
const bs = require("browser-sync").create();
const php = require("gulp-connect-php");

const paths = {
	input: "src/",
	output: "public/",
	css: {
		input: "src/sass/main.sass",
		output: "public/css/"
	},
	js: {
		input: "src/js/*",
		output: "public/js/"
	},
	svgs: {
		input: "src/svg/*",
		output: "public/svg/"
	},
	other: {
		input: "src/**/*.{php,png,jpg,svg,pdf,xml,ico,json}",
		output: "public/"
	},
	reload: "./public"
};

function delPublic(done) {
	del.sync([ paths.output ]);
	done();
};

function buildCSS() {
	return src(paths.css.input)
		.pipe(sass({ outputStyle: "compressed" }))
		.pipe(prefix())
		.pipe(minify({
			discardComments: {
				removeAll: true
			}
		}))
		.pipe(dest(paths.css.output));
};

function buildJS() {
	return src(paths.js.input)
		.pipe(concat("main.js"))
		.pipe(uglify())
		.pipe(dest(paths.js.output))
};

function buildSVGs() {
	return src(paths.svgs.input)
		.pipe(svgmin())
		.pipe(dest(paths.svgs.output));
};

function copyFiles() {
	return src(paths.other.input)
		.pipe(dest(paths.other.output));
};

function startServer(done) {
	php.server({
		base: "./public",
		port: 8000,
		stdio: "ignore"
	});

	bs.init({
		baseDir: "./public",
		notify: false,
		port: 8000,
		proxy: "localhost:8000"
	});

	done();
};

function reloadBrowser(done) {
	bs.reload();
	done();
};

function watchSource(done) {
	watch(paths.input, series(exports.default, reloadBrowser));
	done();
};

// gulp
exports.default = series(
	delPublic,
	parallel(
		buildCSS,
		buildJS,
		buildSVGs,
		copyFiles,
	)
);

// gulp watch
exports.watch = series(
	exports.default,
	startServer,
	watchSource
);