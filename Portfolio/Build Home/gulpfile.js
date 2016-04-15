'use strict';

var gulp = require('gulp'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    prefix = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    notify = require('gulp-notify'),
    minifyCSS = require('gulp-minify-css');

//server connect
// gulp.task('connect', function() {
//     connect.server({
//         root: 'scr',
//         livereload: true
//     });
// });

//css
gulp.task('css', function () {
    gulp.src('scr/style/style.main.scss')
    .pipe(sass())
    .pipe(prefix('last 15 versions'))
    .pipe(minifyCSS(''))
    .pipe(rename('style.main.min.css'))
    .pipe(gulp.dest('dist/style'))
    .pipe(notify('Well done!'))
});

//html


//img


//watch
gulp.task('watch', function(){
    gulp.watch('scr/style/scss/*.scss', ['default'])
});

//default
gulp.task('default', ['css']);