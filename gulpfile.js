"use strict";
const { src, dest, watch, series } = require('gulp');
const notify = require('gulp-notify');
const cleanCss = require('gulp-clean-css');
// const run = require('gulp-run');
// const shell = require('gulp-shell');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');

// var uglify = require('gulp-uglify');
// var rename = require('gulp-rename');

function sassy() {
    return src('./sass/styles.scss')
        .pipe(sourcemaps.init())
            .pipe(sass().on('error', sass.logError))
            .pipe(cleanCss())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('.'))
        .pipe(notify("CSS Compiled!"));
}

/**
 * Removed run because it's no longer safe to use. Can't get shell to work.
 * Purge caches manually.
 */
function decache() {
    // return run('/usr/bin/php ../../admin/cli/purge_caches.php').exec();
    shell.task('/usr/bin/php ../../admin/cli/purge_caches.php');
}

function watchme() {
    watch('./sass/**/*.scss', series(sassy));
}

exports.default = watchme;
exports.sass = sassy;
