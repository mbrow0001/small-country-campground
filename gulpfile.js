'use strict';

// Paths
var basePaths = {
	node: './node_modules',
	dev: './src/'
}

// requirements 
var gulp = require('gulp');
var watch = require('gulp-watch');
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
    gulp.watch('./css/theme.css', []);
});

// Run: 
// gulp scripts
// Uglifies and concat all JS files into one
gulp.task('scripts', function() {
  gulp.src([
    basePaths.dev + 'js/tether.js', // Must be loaded before BS4

    // Start - All BS4 stuff
    basePaths.dev + 'js/bootstrap4/bootstrap.js', 

    // End - All BS4 stuff

    basePaths.dev + 'js/skip-link-focus-fix.js',
    basePaths.dev + 'js/navigation.js'
    ])
    .pipe(concat('theme.js'))
    .pipe(gulp.dest('./js/'));
});