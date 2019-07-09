var gulp = require('gulp');
var uncss = require('gulp-uncss');
var nano = require('gulp-cssnano');

gulp.task('default', function () {
	return gulp.src('css/app.css')
		.pipe(uncss({
			html: ['http://nicos-mbp.local:5757/']
		}))
		.pipe(nano())
		.pipe(gulp.dest('./css/opt'));
});
