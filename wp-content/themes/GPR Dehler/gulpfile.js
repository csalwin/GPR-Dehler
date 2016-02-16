/**
 * Created by Chris on 21/01/16.
 */
var url 		= 'localhost:8888/GPRDehler';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    notify = require("gulp-notify"),

    sourcemaps = require('gulp-sourcemaps'),

    browserSync = require('browser-sync'),
    reload       = browserSync.reload;


gulp.task('browser-sync', function() {
    var files = [
        '**/*.html',
        '**/*.php',
        '**/*.{png,jpg,gif}'
    ];
    browserSync.init(files, {

        // Read here http://www.browsersync.io/docs/options/
        proxy: url,

        // port: 8080,

        // Tunnel the Browsersync server through a random Public URL
        // tunnel: true,

        // Attempt to use the URL "http://my-private-site.localtunnel.me"
        // tunnel: "ppress",

        // Inject CSS changes
        injectChanges: true

    });
});

/**
 * Styles
 *
 * Looking at src/sass and compiling the files into Expanded format, Autoprefixing and sending the files to the build folder
 *
 * Sass output styles: https://web-design-weekly.com/2014/06/15/different-sass-output-styles/
 */
gulp.task('styles', function () {
    gulp.src('./styles/stylesheets/style.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({
            errLogToConsole: true,

            //outputStyle: 'compressed',
            //outputStyle: 'compact',
             outputStyle: 'nested',
            // outputStyle: 'expanded',
            precision: 10
        }))
        .pipe(sourcemaps.write({includeContent: false}))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sourcemaps.write('.'))
        .pipe(plumber.stop())

        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true})) // Inject Styles when min style file is created
        .pipe(notify({ message: 'Styles task complete', onLast: true }))
});


gulp.task('default', ['styles', 'browser-sync'], function () {
        gulp.watch('./styles/stylesheets/*.scss', ['styles']);
        gulp.watch('./styles/stylesheets/**/*.scss', ['styles']);
    });