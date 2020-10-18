const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const changed = require('gulp-changed');
const imagemin = require('gulp-imagemin');

//Sassのコンパイル
gulp.task('sass', function(){

  return gulp.src('src/scss/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(gulp.dest('src/css'));
});

//CSS圧縮
gulp.task('minify-css', function() {

  return gulp.src("src/css/*.css")
    .pipe(cleanCSS())
    .pipe(gulp.dest('dist/css'));
});


// 元のファイル( srcGlob )と吐き出し先のファイル( dstGlob )を比較し、吐き出し先にまだない画像ファイルだけ圧縮
var paths = {
  // 圧縮前と圧縮後のディレクトリを定義
  srcDir : 'src',
  dstDir : 'dist'
};
gulp.task('imagemin', function(){
  
  var srcGlob = paths.srcDir + '/**/*.+(jpg|jpeg|png|gif)';
  var dstGlob = paths.dstDir;
  
  // 圧縮元のディレクトリを指定（srcのimgファイルを上で変数に入れたもの）
  gulp.src( srcGlob )
    
    .pipe(changed( dstGlob ))
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.mozjpeg({progressive: true}),
      imagemin.optipng({optimizationLevel: 5})
      ]
    ))
    // 吐き出し先はdist
    .pipe(gulp.dest( dstGlob ));
});



//自動監視
gulp.task('watch', function(){
  
  gulp.watch('src/scss/*.scss', ['sass']);

  gulp.watch('src/css/*.css', ['minify-css']);

  gulp.watch(paths.srcDir + '/**/*', ['imagemin']);
  
});