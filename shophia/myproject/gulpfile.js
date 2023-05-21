var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var csso = require('gulp-csso');
var rename = require('gulp-rename');

function style() {
    return gulp.src('./app/less/*.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(autoprefixer({
            browsers: ['last 15  versions', '> 1%', 'ie 8', 'ie 7']
        }))
        .pipe(gulp.dest('./app/css'))
        .pipe(csso())
        .pipe(rename({ suffix : '.min' }))
        .pipe(gulp.dest('./app/css'))
        .pipe(browserSync.stream());
}

gulp.task('style', style);

gulp.task('watch', function(){
    watch('./app/less/**/*.+(css|less)', style);
    watch('./app/**/*.html', browserSync.reload);
    watch('./app/js/**/*.js', browserSync.reload);
    watch('./app/img/**/*.*', browserSync.reload);
});

gulp.task('server', function(){
    browserSync.init({
        server:{
            baseDir: './app/'
        },
        notify:true,
        port: 9000
    });
});

gulp.task('default',['style','watch','server']);