
var gulp = require('gulp');
var sass= require('gulp-sass');//sass命令
//gulp.task('命令名',回调函数);


gulp.task('copy-html',function(){
	gulp.src('html/*.html')
	.pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\html'));
});

gulp.task('copy-img',function(){
	gulp.src('img/**/*')
	.pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\img'));
})
gulp.task('copy-font',function(){
	gulp.src('font/**/*')
	.pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\font'));
})

gulp.task('copy-css',function(){
	gulp.src('scss/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\css'));
})

gulp.task('copy-scss',function(){
	gulp.src('scss/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('css'));
})

gulp.task('copy-js',function(){
	gulp.src('js/*.js').pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\js'));
})

gulp.task('copy-php',function(){
	gulp.src('php/*.php').pipe(gulp.dest('D:\\phpStudy\\WWW\\project\\php'));
})

gulp.task('watch',function(){
	gulp.watch('html/*.html',['copy-html']);
	gulp.watch('img/**/*',['copy-img']);
	gulp.watch('js/*.js',['copy-js']);
	gulp.watch('scss/*.scss',['copy-css']);
	gulp.watch('scss/*.scss',['copy-scss']);
	gulp.watch('php/*.php',['copy-php']);
})
