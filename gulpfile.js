// requirements
var gulp = require('gulp');

gulp.task('watch', function() {
    // content
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('./css/theme.css', ['cssnano']);
});