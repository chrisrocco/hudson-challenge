const gulp = require("gulp");
const sass = require("gulp-sass");

gulp.task("sass", function () {
    let css = [
        "./sass/style.scss",
        "./sass/dark.scss",
        "./sass/responsive.scss"
    ];
    gulp.src(css)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});