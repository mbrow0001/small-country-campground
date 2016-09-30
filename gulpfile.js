'use strict';

// requirements 
var gulp = require('gulp');
var sass = require('gulp-sass');

// Paths
var basePaths = {
	node: './node_modules'
}

// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function() {
    gulp.src('./sass/*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./css'))
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

// gulp.task('hello', function() {
//     console.log("Hello You :D");
// });