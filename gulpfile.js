const gulp = require('gulp');
const pug = require('gulp-pug');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
const autoprefixer =require('gulp-autoprefixer');
const cssmin = require('gulp-cssmin');
const uglify = require('gulp-uglify');
const browsersync = require('browser-sync');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const webp = require("gulp-webp");
const tap = require("gulp-tap");
const rename = require("gulp-rename");
const del = require('del');

const paths = {
  src: 'src',
  dest: 'assets'
};

const srcpath = "src/";

gulp.task("webp", function () {
  return gulp.src(srcpath + "img/**/*.{jpg,jpeg,png}")
  .pipe(tap(function(file,t){
    var en = file.extname;
    return gulp.src(file.path, {base: srcpath + 'img/'})
    .pipe(webp({
      quality: 80
    }))
    .pipe(rename({
      suffix: en
    }))
    .pipe(gulp.dest(srcpath + '../assets/img/'));
  }));
});

//Pug
gulp.task('html', function() {
  return gulp.src([
    paths.src + '/pug/**/*.pug',
    '!' + paths.src + '/pug/**/_*.pug'
  ])
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(pug({pretty: true}))
  .pipe(gulp.dest(paths.dest))
});

//Sass
gulp.task('css', function() {
  return gulp.src([
    paths.src + '/sass/**/*.scss',
    '!' + paths.src + '/sass/**/_*.scss'
  ])
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(sass({
    outputStyle: 'expanded'
  }))
  .pipe(autoprefixer({
    overrideBrowserslist: 'last 2 versions'
  }))
  //.pipe(cssmin())
  .pipe(gulp.dest(paths.dest + '/css'))
});

//JavaScript
gulp.task('js', function() {
  return gulp.src(
    paths.src + '/js/**/*'
  )
  .pipe(uglify())
  .pipe(gulp.dest(paths.dest + '/js'))
});

//Image File
gulp.task('image', function() {
  return gulp.src(
    paths.src + '/img/**/*'
  )
  .pipe(gulp.dest(paths.dest + '/img'))
});

//Watch
gulp.task('watch', function () {
  gulp.watch(paths.src + '/sass/**/*', gulp.task('css'));
  gulp.watch(paths.src + '/js/**/*', gulp.task('js'));
  gulp.watch(paths.src + '/img/**/*', gulp.task('image'));
});


//Default
gulp.task('default',
gulp.series(
  gulp.parallel(
    'html',
    'css',
    'js',
    'image',
    'watch',
    'webp'
  )
)
);
