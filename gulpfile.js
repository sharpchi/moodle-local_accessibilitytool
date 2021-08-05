"use strict";
const { src, dest, watch, series } = require('gulp');
const notify = require('gulp-notify');
const cleanCss = require('gulp-clean-css');
const sass = require('gulp-sass')(require('sass'))
const sourcemaps = require('gulp-sourcemaps');

function sassy() {
    return src('./sass/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCss())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('.'))
        .pipe(notify("CSS Compiled!"));
}

function watchme() {
    watch('./sass/**/*.scss', series(sassy));
}

exports.default = watchme;
exports.sass = sassy;