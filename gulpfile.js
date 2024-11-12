"use strict";
const {src, dest, watch, series} = require('gulp');
const notify = require('gulp-notify');
const cleanCss = require('gulp-clean-css');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const gap = require('gulp-append-prepend');

function sassy() {
    return src('./scss/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCss())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('.'))
        .pipe(notify("CSS Compiled!"));
}

function bitolint() {
    return src('./styles.css')
        .pipe(gap.prependText('/* stylelint-disable */'))
        .pipe(dest('.'));
}

function watchme() {
    watch('./scss/**/*.scss', series(sassy, bitolint));
}

exports.default = watchme;
