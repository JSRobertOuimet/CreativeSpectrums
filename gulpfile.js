// Requiring Node modules
var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var jade = require('gulp-jade');
var jsmin = require('gulp-jsmin');
var reload = browserSync.reload;
var removeEmptyLines = require('gulp-remove-empty-lines');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

// Compiling .jade to .html
gulp.task('jade', function() {
	var YOUR_LOCALS = {};
	return gulp.src('./src/jade/*.jade')
		.pipe(jade({
			locals: 'YOUR_LOCALS'
		}))
		.pipe(gulp.dest('./dist'));
});

gulp.task('jade-watch', ['jade'], reload);

// Compiling .sass to .css, renaming to .min.css & refreshing
gulp.task('sass', function () {
	return gulp.src('./src/sass/main.sass')
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./dist/css'))
		.pipe(reload({stream: true}));
});

// Minifying .js, removing empty lines, renaming to .min.js & refreshing
gulp.task('jsmin', function () {
  gulp.src('src/js/*.js')
		.pipe(jsmin())
		.pipe(removeEmptyLines())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./dist/js'))
		.pipe(reload({stream: true}));
});

// Serving & watching .sass, .js & .jade
gulp.task('default', ['sass', 'jsmin', 'jade'], function () {
	browserSync({server: './dist', notify: false});
	gulp.watch('./src/sass/*.sass', ['sass']);
	gulp.watch('./src/js/*.js', ['jsmin']);
	gulp.watch('./src/jade/*.jade', ['jade-watch']);
});