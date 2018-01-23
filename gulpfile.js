var gulp = require('gulp');
var uglify = require('gulp-uglify')
var minifyCSS = require('gulp-minify-css')
var imagemin = require('gulp-imagemin')
const imageminJpegtran = require('imagemin-jpegtran');

gulp.task('script', function() {
  gulp.src('assets/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});
gulp.task('css', function () {
  gulp.src('assets/css/*.css')
    .pipe(minifyCSS())
    .pipe(gulp.dest('dist/css'))
})
gulp.task('images', function () {
  gulp.src('assets/images/*.*')
    .pipe(imagemin({
        progressive: true
    }))
    .pipe(gulp.dest('dist/images'))
});
gulp.task('auto', function () {
  gulp.watch('assets/js/*.js', ['js'])
  gulp.watch('assets/css/*.css', ['css'])
  gulp.watch('assets/images/*.*', ['images'])
});

gulp.task('default', ['images', 'script', 'css', 'auto'])