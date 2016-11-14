'use strict';

/**
* Configuration.
*
* Project Configuration for gulp tasks.
*
* Edit the variables as per your project requirements.
*/
var basePaths = {
	node: './node_modules/',
	dev: './build/'
}

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var cssnano = require('gulp-cssnano');
//var uncss = require('gulp-uncss');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var rimraf = require('gulp-rimraf');
var ignore = require('gulp-ignore');
var sourcemaps = require('gulp-sourcemaps');
var runSequence = require('run-sequence');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

/**
 * Browser Sync.
 *
 * automatically reloads the page when files changed.
 */
var browserSyncWatchFiles = [
    './css/*.min.css',
    './js/*.min.js',
    './**/*.php',
    './*.php'
];

var browserSyncOptions = {
    proxy: "vccw.dev",
    notify: false
};

gulp.task('browser-sync', function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});


/**
 * Task: gulp sass
 *
 * Compiles SCSS files in CSS.
 */
gulp.task('sass', function() {
    gulp.src('./sass/*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./css'))
});

/**
 * Task: gulp scripts
 * Uglifies and concat all JS files into one.
 */

gulp.task('scripts', function() {
  gulp.src([

    basePaths.dev   + 'js/tether.js', // load before BS4
    basePaths.dev   + 'js/bootstrap4/bootstrap.js',
    basePaths.dev   + 'js/parallax.min.js',
    basePaths.node  + 'masonry-layout/dist/masonry.pkgd.min.js',
    basePaths.node  + 'fullpage.js/dist/jquery.fullpage.min.js',
    basePaths.node  + 'scrollreveal/dist/scrollreveal.min.js',
    basePaths.node  + 'isotope-layout/dist/isotope.pkgd.min.js',
    basePaths.node  + 'lightbox2/dist/js/lightbox.min.js',
    basePaths.node  + 'owl.carousel/dist/owl.carousel.min.js',
    basePaths.dev   + 'js/navigation.js',
    basePaths.dev   + 'js/skip-link-focus-fix.js',
    './js/parallax.min.js',
    './js/custom.js' // Custom Theme Script
    ])
    .pipe(concat('theme.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'))
    .pipe(reload({stream: true}));
});


// Run: 
// gulp nanocss
// Minifies CSS files
gulp.task('cssnano', ['cleancss'], function(){
  return gulp.src('./css/*.css')
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/'))
    .pipe(reload({stream: true}));
}); 


gulp.task('cleancss', function() {
  return gulp.src('./css/*.min.css', { read: false }) // much faster 
    .pipe(ignore('theme.css'))
    .pipe(rimraf());
});


/**
 * Task: Watch
 * Uglifies and concat all JS files into one.
 */

gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('./css/style.css', ['cssnano']);
  // gulp.watch('/*.php', browserSync.reload);
  // gulp.watch('/js/**/*.js', browserSync.reload);
});



/**
 * Task: Deaful task
 * Starts watcher with browser-sync. Browser-sync reloads page automatically on your browser.
 */
gulp.task('default', ['browser-sync', 'watch', 'sass', 'scripts'], function () { });

// Run: 
// gulp build 
// Copy all needed dependency assets files from bower_component assets to themes /js, /scss and /fonts folder. Run this task after bower install or bower update

gulp.task('build', function() {
    gulp.src(basePaths.node + 'bootstrap/dist/js/**/*.js')
       .pipe(gulp.dest(basePaths.dev + '/js/bootstrap4'));

    gulp.src(basePaths.node + 'bootstrap/scss/**/*.scss')
       .pipe(gulp.dest(basePaths.dev + '/sass/bootstrap4'));

    gulp.src(basePaths.node + 'owl.carousel/src/scss/*.scss')
       .pipe(gulp.dest(basePaths.dev + '/sass/owl-carousel'));

    gulp.src(basePaths.node + 'font-awesome/fonts/**/*.{ttf,woff,woff2,eof,svg}')
        .pipe(gulp.dest('./fonts'));

    gulp.src(basePaths.node + 'font-awesome/scss/*.scss')
        .pipe(gulp.dest(basePaths.dev + '/sass/fontawesome'));

    gulp.src(basePaths.node + 'jquery/dist/*.js')
        .pipe(gulp.dest(basePaths.dev + '/js'));

    gulp.src(basePaths.node + 'tether/dist/js/*.js')
        .pipe(gulp.dest(basePaths.dev + '/js'));

    gulp.src(basePaths.node + 'tether/dist/css/*.css')
        .pipe(gulp.dest(basePaths.dev + '/css'));

});
