var gulp = require('gulp');
var uncss = require('gulp-uncss');
var nano = require('gulp-cssnano');

gulp.task('default', function () {
	return gulp.src('css/app.css')
		.pipe(uncss({
			ignore: ['.top-bar.expanded', '.top-bar.expanded .title-area'],
			html: ['http://nicos-16-mbp.local:5757/', 'http://nicos-16-mbp.local:5757/events.php', 'http://nicos-16-mbp.local:5757/menu.php', 'http://nicos-16-mbp.local:5757/location.php']
		}))
		.pipe(nano())
		.pipe(gulp.dest('./css/opt'));
});
