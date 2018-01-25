var gulp = require('gulp');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var imagemin = require('gulp-imagemin');
var imageminJpegtran = require('imagemin-jpegtran');
var sass = require('gulp-ruby-sass');

gulp.task('script', function() {
  gulp.src('assets/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});
gulp.task('sass', function () {
    return sass('assets/scss/**/*.scss', {
      style: 'compressed',
    })
    .pipe(gulp.dest('dist/css'));
});
gulp.task('images', function () {
  gulp.src('assets/images/*.*')
    .pipe(imagemin({
        progressive: true
    }))
    .pipe(gulp.dest('dist/images'));
});
gulp.task('auto', function () {
  gulp.watch('assets/js/*.js', ['script']);
  gulp.watch('assets/scss/**/*.scss', ['sass']);
  gulp.watch('assets/images/*.*', ['images']);
});

gulp.task('default', ['images', 'script', 'sass', 'auto']);