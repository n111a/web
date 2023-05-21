var gulp = require('gulp'); // Подключение Gulp
var less = require('gulp-less'); // Подключение пакета less
var watch = require('gulp-watch'); // Подключение пакета watch
var browserSync = require('browser-sync'); // Подключение пакета browser sync
var autoprefixer = require('gulp-autoprefixer'); // Подключение библиотеки для автоматического добавления префиксов
var plumber = require('gulp-plumber'); // Подключение пакета plumber для отслеживания ошибок
var csso = require("gulp-csso"); // Подключение пакета csso для минификации и оптимизации css
var rename = require("gulp-rename"); // Подключение пакета rename для переименования файлов
gulp.task('style', style); // Создаем таск style
function style() {
    return gulp.src('./app/less/*.less') // Берем все less файлы из папки less
        .pipe(plumber()) // Отслеживаем ошибки
        .pipe(less()) // Преобразуем less в css посредством пакета gulp-less
        .pipe(autoprefixer({ // Создаем префиксы
            browsers: ['last 15 versions', '> 1%', 'ie 8', 'ie 7']
        }))
        .pipe(gulp.dest('./app/css')) // Выгружаем результат в папку "app/css"
        .pipe(csso()) // Сжимаем файл
        .pipe(rename({ suffix: '.min' })) // Добавляем суффикс .min
        .pipe(gulp.dest('./app/css')) // Выгружаем результат в папку "app/css"
        .pipe(browserSync.stream()); // Обновляем страницу при изменении
}
gulp.task('server', function () { // Создаем таск server
    browserSync.init({ // Выполняем Browser Sync
        server: { // Определяем параметры сервера
            baseDir: './app/' // Директория для сервера - папка 'app'
        },
        notify: true, // Включаем уведомления
        port: 9000 // Устанавливаем любой удобный порт
    });
});
gulp.task('watch', function () { // Создаем таск watch
    watch('./app/less/**/*.+(css|less)', style); // Наблюдение за less и css файлами
    watch('./app/**/*.html', browserSync.reload); // Наблюдение за html файлами
    watch('./app/js/**/*.js', browserSync.reload); // Наблюдение за js файлами
    watch('./app/img/**/*.*', browserSync.reload); // Наблюдение за картинками
});
gulp.task('default', ['style', 'server', 'watch']);