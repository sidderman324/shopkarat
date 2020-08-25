'use strict';

// Читаем содержимое package.json в константу
const pjson = require('./package.json');
// Получим из константы другую константу с адресами папок сборки и исходников
const dirs = pjson.config.directories;

// Определим необходимые инструменты
const gulp = require('gulp');
const less = require('gulp-less');
const rename = require('gulp-rename');
const fontsCopy = require('gulp-copy');
const sourceCopy = require('gulp-copy');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const mqpacker = require('css-mqpacker');
const replace = require('gulp-replace');
// const font2css = require('gulp-font2css');
const fileinclude = require('gulp-file-include');
const del = require('del');
const browserSync = require('browser-sync').create();
const ghPages = require('gulp-gh-pages');
const newer = require('gulp-newer');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const cheerio = require('gulp-cheerio');
const svgstore = require('gulp-svgstore');
const svgmin = require('gulp-svgmin');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const cleanCSS = require('gulp-cleancss');
const spritesmith = require('gulp.spritesmith');
const buffer = require('vinyl-buffer');
const merge = require('merge-stream');

// ЗАДАЧА: Компиляция препроцессора
gulp.task('less', function(){
  return gulp.src(dirs.source + '/less/style.less')         // какой файл компилировать (путь из константы)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())                                // инициируем карту кода
    .pipe(less())                                           // компилируем LESS
    .pipe(postcss([                                         // делаем постпроцессинг
        autoprefixer({ browsers: ['last 2 version'] }),     // автопрефиксирование
        mqpacker({ sort: true }),                           // объединение медиавыражений
        ]))
    .pipe(sourcemaps.write('/'))                            // записываем карту кода как отдельный файл (путь из константы)
    .pipe(gulp.dest(dirs.build + '/css/'))                  // записываем CSS-файл (путь из константы)
    .pipe(browserSync.stream())
    .pipe(rename('style.min.css'))                          // переименовываем
    .pipe(cleanCSS())                                       // сжимаем
    .pipe(gulp.dest(dirs.build + '/css/'));                 // записываем CSS-файл (путь из константы)
    });

// ЗАДАЧА: Сборка PHP
gulp.task('php', function() {
  return gulp.src(dirs.source + '/**/**/**/*.php')                  // какие файлы обрабатывать (путь из константы, маска имени)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(replace(/\n\s*<!--DEV[\s\S]+?-->/gm, ''))         // убираем комментарии <!--DEV ... -->
    .pipe(gulp.dest(dirs.build));                // записываем файлы (путь из константы)
    });

// ЗАДАЧА: Копирование шрифтов
gulp.task('fontsCopy', function() {
  return gulp.src(dirs.source + '/fonts/*.{ttf,woff,woff2,eot}')                  // какие файлы обрабатывать (путь из константы, маска имени)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(gulp.dest(dirs.build + '/fonts'));                // записываем файлы (путь из константы)
    });

// ЗАДАЧА: Копирование шрифтов
gulp.task('jsonCopy', function() {
  return gulp.src(dirs.source + '/**/**/**/*.json')                  // какие файлы обрабатывать (путь из константы, маска имени)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(gulp.dest(dirs.build));                // записываем файлы (путь из константы)
    });

// ЗАДАЧА: Копирование файлов из корня
gulp.task('sourceCopy', function() {
  return gulp.src(dirs.source + '/*')                  // какие файлы обрабатывать (путь из константы, маска имени)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(gulp.dest(dirs.build));                // записываем файлы (путь из константы)
    });

// ЗАДАЧА: Копирование изображений
// gulp.task('img', function () {
//   return gulp.src([
//         dirs.source + '/imgs/*.{gif,png,jpg,jpeg,svg}',      // какие файлы обрабатывать (путь из константы, маска имени, много расширений)
//         ],
//       {since: gulp.lastRun('img')}                          // оставим в потоке обработки только изменившиеся от последнего запуска задачи (в этой сессии) файлы
//       )
//   .pipe(plumber({ errorHandler: onError }))
//     .pipe(newer(dirs.build + '/imgs'))                       // оставить в потоке только новые файлы (сравниваем с содержимым папки билда)
//     .pipe(gulp.dest(dirs.build + '/imgs'));                  // записываем файлы (путь из константы)
//   });

gulp.task('img', function() {
  return gulp.src(dirs.source + '/**/**/**/*.{gif,png,jpg,jpeg,svg,mp4,ogv,webm}')                  // какие файлы обрабатывать (путь из константы, маска имени)
  .pipe(plumber({ errorHandler: onError }))
    .pipe(gulp.dest(dirs.build));                // записываем файлы (путь из константы)
    });

// ЗАДАЧА: Оптимизация изображений (ЗАДАЧА ЗАПУСКАЕТСЯ ТОЛЬКО ВРУЧНУЮ)
gulp.task('img:opt', function () {
  return gulp.src([
      dirs.source + '/imgs/*.{gif,png,jpg,jpeg,svg}',        // какие файлы обрабатывать (путь из константы, маска имени, много расширений)
      '!' + dirs.source + '/imgs/sprite-svg.svg',            // SVG-спрайт брать в обработку не будем
      ])
  .pipe(plumber({ errorHandler: onError }))
    .pipe(imagemin({                                        // оптимизируем
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngquant()]
      }))
    .pipe(gulp.dest(dirs.source + '/imgs'));                  // записываем файлы в исходную папку
    });


// ЗАДАЧА: Очистка папки сборки
gulp.task('clean', function () {
  return del([ dirs.build + '/**/*'], {force: true});
  });

// ЗАДАЧА: Конкатенация и углификация Javascript
gulp.task('js', function () {
  return gulp.src([
      // список обрабатываемых файлов
      dirs.source + '/js/jquery-3.1.1.js',
      dirs.source + '/js/jquery-migrate-1.4.1.min.js',
      dirs.source + '/js/jquery.nested.js',
      dirs.source + '/js/vue.js',
      dirs.source + '/js/swiper.js',
      dirs.source + '/js/script.js',
      ])
  .pipe(plumber({ errorHandler: onError }))
  .pipe(concat('script.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest(dirs.build + '/js'));
  });

// ЗАДАЧА: Сборка всего
gulp.task('build', gulp.series(                             // последовательно:
  'clean',                                                  // последовательно: очистку папки сборки
  gulp.parallel('less', 'img', 'js'),
  'fontsCopy'
  ));

// ЗАДАЧА: Локальный сервер, слежение
gulp.task('serve', gulp.series('build', function() {

  gulp.watch(                                               // следим за HTML
    [
      dirs.source + '/**/**/**/*.php',                              // в папке с исходниками
      dirs.source + '/modules/*.php',                     // и в папке с мелкими вставляющимся файлами
      ],
    gulp.series('php')                           // при изменении файлов запускаем пересборку HTML и обновление в браузере
    );
  gulp.watch(                                               // следим за HTML
    [
      dirs.source + '/fonts/*.{ttf,woff,woff2}',                              // в папке с исходниками
      ],
    gulp.series('fontsCopy')                           // при изменении файлов запускаем пересборку HTML и обновление в браузере
    );
  gulp.watch(                                               // следим за HTML
    [
      dirs.source + '/**/**/**/*.json',                              // в папке с исходниками
      ],
    gulp.series('jsonCopy')                           // при изменении файлов запускаем пересборку HTML и обновление в браузере
    );

  gulp.watch(                                               // следим за LESS
    dirs.source + '/less/**/*.less',
    gulp.series('less')                                     // при изменении запускаем компиляцию (обновление браузера — в задаче компиляции)
    );

  gulp.watch(                                               // следим за изображениями
    dirs.source + '/imgs/**/**/*.{gif,png,jpg,jpeg,svg}',
    gulp.series('img')                            // при изменении оптимизируем, копируем и обновляем в браузере
    );

  gulp.watch(                                               // следим за JS
    dirs.source + '/js/*.js',
    gulp.series('js')                            // при изменении пересобираем и обновляем в браузере
    );

  }));

// ЗАДАЧА: Задача по умолчанию
gulp.task('default',
  gulp.series('serve')
  );

// Дополнительная функция для перезагрузки в браузере
function reloader(done) {
  browserSync.reload();
  done();
}

// Проверка существования файла/папки
function fileExist(path) {
  const fs = require('fs');
  try {
    fs.statSync(path);
    } catch(err) {
      return !(err && err.code === 'ENOENT');
    }
  }

  var onError = function(err) {
    notify.onError({
      title: "Error in " + err.plugin,
      })(err);
      this.emit('end');
    };
