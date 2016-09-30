'use strict';

// Paths
var basePaths = {
	node: './node_modules',
	dev: './src'
}

// requirements 
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');


// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function() {
    gulp.src('./sass/*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./css'))
});

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

// Run: 
// gulp scripts
// Uglifies and concat all JS files into one
gulp.task('scripts', function() {
  gulp.src([
  	'./src/js/jquery.js',
  	'./src/js/**/*.js'])
    .pipe(concat('theme.js'))
    .pipe(gulp.dest('./js/'));
});