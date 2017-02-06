var gulp = require('gulp'),
    gutil = require('gulp-util'),
//  webserver = require('gulp-webserver'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    precss = require('precss'),
//  cssnano = require('cssnano'),
    animation = require('postcss-animation'),
    browserSync = require('browser-sync').create(),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    gulp_jspm = require('gulp-jspm'),

    source = 'css/', //source css files
    dest = '.'; //build file
    jsFiles = 'js/custom/'
    jsDest = 'js';

//need to add browserify for masonry.js

gulp.task('css', function() {
  gulp.src(source + 'style.css')
  .pipe(postcss([
    precss(),
    animation(),
    autoprefixer(),
//    cssnano()
  ]))
  .on('error', gutil.log)
  .pipe(gulp.dest(dest))
});

gulp.task('watch', function() {
  gulp.watch(source + '**/*.css', ['css']);
});

gulp.task('default', ['css', 'watch']);
