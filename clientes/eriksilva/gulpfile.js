// instanciando módulos
var gulp 		= require('gulp');
var gutil 		= require('gulp-util');
var uglify 		= require('gulp-uglify');
var watch 		= require('gulp-watch');
var concat 		= require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var less      = require('gulp-less');
var gcallback = require('gulp-callback')
 

gulp.task('less', function () {
  return gulp
          .src('_arquivos/less/**/*.less')
          .pipe(less())
          .pipe(minifyCss())
          .pipe(gulp.dest('_arquivos/css/'))
          .pipe(gcallback(function() {
              gulp.run('css');
          }));
});


gulp.task('scripts', function() { 
    return gulp
            .src(['_arquivos/js/jquery.js', 
                  '_arquivos/js/isotope.pkgd.min.js',
                  '_arquivos/js/bootstrap.js',
                  '_arquivos/js/scripts.js'])
            .pipe(concat('scripts.js'))
            .pipe(uglify())
            .pipe(gulp.dest('js'));      
});


gulp.task('css', function() {
    return gulp
            .src(['_arquivos/css/bootstrap.css', 
                  '_arquivos/css/loader.css',
                  '_arquivos/css/less.css'])
            .pipe(minifyCss())
            .pipe(concat('style.css'))
            .pipe(gulp.dest('css'));      
});


gulp.task('watch', function() {
    gulp.watch('_arquivos/**/*.*', function(event) {
        gutil.log('File '+event.path+' was '+event.type+', running tasks...');
        gulp.run('less');
        gulp.run('scripts');
    });
});


gulp.task('default', ['watch','less', 'scripts', 'css']);