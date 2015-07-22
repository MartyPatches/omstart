var gulp = require('gulp');
var path = require('path');
var less = require('gulp-less');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var autoPrefixer = require('gulp-autoprefixer');
var cssComb = require('gulp-csscomb');
var cmq = require('gulp-combine-media-queries');
var minifyCss = require('gulp-minify-css');
var browserify = require('gulp-browserify');
var uglify = require('gulp-uglify');
gulp.task('css',function(){
	gulp.src(['css/src/**/*.css'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(autoPrefixer())
		.pipe(cssComb())
		.pipe(cmq())
		.pipe(gulp.dest('css/dist'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest('css/dist'));
});
gulp.task('style', function(){
	gulp.src('./assets/less/style.less')
	.pipe(less())
	.pipe(autoPrefixer())
	.pipe(gulp.dest('../'))
	.pipe(notify('Style task completed'));
});
gulp.task('js',function(){
	gulp.src(['./assets/js/script.js'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
  		.pipe(browserify())
		.pipe(gulp.dest('../'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(gulp.dest('../'))
		.pipe(notify('JS task completed'));
});
gulp.task('html',function(){
	gulp.src(['html/**/*.html'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(gulp.dest('./'));
});
gulp.task('default',function(){
	gulp.watch('js/src/**/*.js',['js']);
	gulp.watch('./assets/less/**/*.less', ['style']);
	//gulp.watch('css/src/**/*.css',['css']);
	//gulp.watch('html/**/*.html',['html']);
});
