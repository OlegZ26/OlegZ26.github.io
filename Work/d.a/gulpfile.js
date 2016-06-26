'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    minifyCSS = require('gulp-minify-css'),
    rigger = require('gulp-rigger'),
    notify = require('gulp-notify');


var path = {
    build: {
        html: 'build/',
        js: 'build/js/',
        css: 'build/css/',
        img: 'build/img/',
        fonts: 'build/fonts/'
    },
    src: {
        html: 'src/*.html',
        js: 'src/js/main.js',
        style: 'src/scss/main.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    watch: {
        html: 'src/**/*.html',
        js: 'src/js/**/*.js',
        style: 'src/scss/**/*.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    clean: './build'
};

gulp.task('html:build', function () {
    gulp.src(path.src.html)
        .pipe(gulp.dest(path.build.html))
        .pipe(notify('Well done html:build!'))
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)                // Найдем наш main файл
        .pipe(rigger())                  // Прогоним через rigger
        .pipe(uglify())                  // Сожмем наш js
        .pipe(gulp.dest(path.build.js))  // Готовый файл отправим в build
        .pipe(notify('Well done js:build!'))
});

gulp.task('style:build', function () {
    gulp.src(path.src.style)                // Выберем наш main.scss
        .pipe(sass())                       // Скомпилируем
        .pipe(prefixer('last 15 versions')) // Добавим вендорные префиксы
        .pipe(minifyCSS())                  // Сожмем
        .pipe(rename('style.css'))
        .pipe(gulp.dest(path.build.css))    // Готовый файл отправим в build
        .pipe(notify('Well done style:build!'))
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('image:build', function() {
    gulp.src(path.src.img)
        .pipe(gulp.dest(path.build.img))
});

gulp.task('build', [
        'html:build',
        'js:build',
        'style:build',
        'image:build',
        'fonts:build'
]);

gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});

gulp.task('default', ['build', 'watch']);