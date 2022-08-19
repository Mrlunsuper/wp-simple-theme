/* jshint esversion: 6 */ 
const gulp = require('gulp');
const gSass = require('gulp-sass');
const nSaas = require('sass');
const sass = gSass(nSaas);

gulp.task('sass', function() {
    return gulp.src('./assets/scss/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
    }
);

gulp.task('watch', function() {
    gulp.watch('./assets/scss/**/*.scss', gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'watch'));