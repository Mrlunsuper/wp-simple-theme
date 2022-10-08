/* jshint esversion: 6 */ 
const gulp = require('gulp');
const gSass = require('gulp-sass');
const nSaas = require('sass');
const sass = gSass(nSaas);
const zip = require('gulp-zip');

gulp.task('sass', function() {
    return gulp.src('./assets/scss/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
    }
);

gulp.task('watch', function() {
    gulp.watch('./assets/scss/**/*.scss', gulp.series('sass'));
    //gulp.watch('./assets/milligram/**/*.sass', gulp.series('miligram-sass'));
});

gulp.task( 'zip', function() {
    gulp.src([
        '*',
        '!node_modules/',
        '!.gitignore',
        '!package-lock.json',
        '!package.json',
        '!ruleset.xml',
        '!gulpfile.js'
    ])
    .pipe(zip('wp-simple-them.zip'))
    .pipe(gulp.dest('release'));
})

gulp.task('default', gulp.series('sass', 'watch'));
gulp.task('release', gulp.series('sass','zip'))