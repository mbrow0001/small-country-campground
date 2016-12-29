'use strict';
/**
 * Configuration. */
var basePaths = {
    node: './node_modules/',
    dev: './build/'
}

/**
 * Javascript Files.
 * Add all the JS files you want to run gulp tasks.
 */
var jsFiles = [
    // Build Scripts
    basePaths.dev + 'js/tether.js', // load before BS4
    basePaths.dev + 'js/bootstrap4/bootstrap.js',
    basePaths.dev + 'js/parallax.min.js',
    basePaths.dev + 'js/navigation.js',
    basePaths.dev + 'js/skip-link-focus-fix.js',
    // NPM Modules
    basePaths.node + 'masonry-layout/dist/masonry.pkgd.min.js',
    basePaths.node + 'fullpage.js/dist/jquery.fullpage.min.js',
    basePaths.node + 'scrollreveal/dist/scrollreveal.min.js',
    basePaths.node + 'isotope-layout/dist/isotope.pkgd.min.js',
    basePaths.node + 'owl.carousel/dist/owl.carousel.min.js',
    // Custome Theme Files
    'js/parallax.min.js',
    'js/custom.js'
]

/**
 * Load Plugins.
 * Load gulp plugins and assing them semantic names.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var watch = require('gulp-watch');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var rimraf = require('gulp-rimraf');
var ignore = require('gulp-ignore');
var sourcemaps = require('gulp-sourcemaps');
var relativeSourcemapsSource = require('gulp-relative-sourcemaps-source');
var runSequence = require('run-sequence');
var plumber = require('gulp-plumber');
var jshint = require('gulp-jshint');
var ftp = require('vinyl-ftp');
var jscs = require('gulp-jscs');
var gutil = require('gulp-util');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

var onError = function(err) {
    console.log('An error occurred:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
};

/**
 * Browser Sync.
 * automatically reloads the page when files changed.
 */
var browserSyncWatchFiles = [
    './build/js/*.js',
    './css/*.min.css',
    './js/*.min.js',
    './js/*.js',
    './**/*.php'
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
 * Compiles SCSS files in CSS.
 */
gulp.task('sass', function() {
    gulp.src('./sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(relativeSourcemapsSource({dest: './css'}))
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css'))
        .pipe(reload({ stream: true }));;
});

/**
 * Task: gulp cssnano
 * Minify CSS + SourceMaps
 */
gulp.task('cssnano', ['cleancss'], function() {
    return gulp.src('./css/*.css')
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(plumber({ errorHandler: onError }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(cssnano())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css/'))
        .pipe(reload({ stream: true }));
});

gulp.task('cleancss', function() {
    return gulp.src('./css/*.min.css', {
            read: false
        }) // much faster 
        .pipe(ignore('style.css'))
        .pipe(rimraf());
});

/**
 * Task: Watch
 *  Watches for changes
 */
gulp.task('watch-prod', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('./css/style.css', ['cssnano']);
    gulp.watch('./build/js/*.js', ['scripts']);
});

gulp.task('watch-dev', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('./css/style.css');
    gulp.watch('./build/js/*.js', ['scripts']);
});

gulp.task('watch', ['browser-sync', 'watch-dev'], function() {});


/**
 * Task: gulp scripts
 * Uglifies and concat all JS files into one.
 */
gulp.task('scripts', function() {
    gulp.src(jsFiles)
        .pipe(plumber({ errorHandler: onError }))
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish', { verbose: false }))
        .pipe(jscs(''))
        .pipe(concat('theme.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js/'))

    gulp.src(jsFiles)
        .pipe(plumber({ errorHandler: onError }))
        .pipe(concat('theme.js'))
        .pipe(gulp.dest('./js/'))
});

/**
 * Task: gulp build
 * Builds necessary files from npm dependencies to use gulp tasks.
 */
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


gulp.task('deploy', function() {

    var conn = ftp.create({
        host: '',
        user: '',
        password: '',
        parallel: 10,
        log: gutil.log
    });

    var globs = [
        'page-templates/*.php',
        'inc/*.php',
        'css/*.css',
        'js/*.js',
        '*.php'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src(globs, {
            base: '.',
            buffer: false
        })
        .pipe(conn.newer('/www/wp-content/themes/theme-name')) // only upload newer files
        .pipe(conn.dest('/www/wp-content/themes/theme-name'));

});