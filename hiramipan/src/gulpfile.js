/* package */
const { src, dest, watch, series, parallel } = require("gulp"); // Gulpの基本関数をインポート
const sass = require("gulp-sass")(require("sass")); // SCSSをCSSにコンパイルするためのモジュール
const plumber = require("gulp-plumber"); // エラーが発生してもタスクを続行するためのモジュール
const notify = require("gulp-notify"); // エラーやタスク完了の通知を表示するためのモジュール
const sassGlob = require("gulp-sass-glob-use-forward"); // SCSSのインポートを簡略化するためのモジュール
const mmq = require("gulp-merge-media-queries"); // メディアクエリをマージするためのモジュール
const postcss = require("gulp-postcss"); // CSSの変換処理を行うためのモジュール
const autoprefixer = require("autoprefixer"); // ベンダープレフィックスを自動的に追加するためのモジュール
const cssdeclsort = require("css-declaration-sorter"); // CSSの宣言をソートするためのモジュール
const postcssPresetEnv = require("postcss-preset-env"); // 最新のCSS構文を使用可能にするためのモジュール
const sourcemaps = require("gulp-sourcemaps"); // ソースマップを作成するためのモジュール
const babel = require("gulp-babel"); // ES6+のJavaScriptをES5に変換するためのモジュール
const imageminSvgo = require("imagemin-svgo"); // SVGを最適化するためのモジュール
const browserSync = require("browser-sync"); // ブラウザの自動リロード機能を提供するためのモジュール
const imagemin = require("gulp-imagemin"); // 画像を最適化するためのモジュール
const imageminMozjpeg = require("imagemin-mozjpeg"); // JPEGを最適化するためのモジュール
const imageminPngquant = require("imagemin-pngquant"); // PNGを最適化するためのモジュール
const changed = require("gulp-changed"); // 変更されたファイルのみを対象にするためのモジュール
const del = require("del"); // ファイルやディレクトリを削除するためのモジュール
const webp = require('gulp-webp');//webp変換
const rename = require('gulp-rename');//ファイル名変更


// 読み込み先
const srcPath = {
	css: './sass/**/*.scss',
	js: './js/**/*',
	img: './images/**/*',
	ejs: './ejs/**/*.ejs'
}

// html反映用
// const destPath = {
// 	all: '../../dist/**/*',
// 	css: '../../dist/css/',
// 	js: '../../dist/js/',
// 	img: '../../dist/images/',
// 	html: '../../dist/',
// }

const themeName = "hiramipan"; // WordPress theme name
const destWpPath = {
	css: `../assets/css/`,
	js: `../assets/js/`,
	img: `../assets/images/`,
}


// 不要ファイルを削除
// const del = require('del');
// const delPath = {
// 	dist: '../dist/'
// }
// const clean = (done) => {
// 	del(delPath.dist, { force: true, });
// 	done();
// };
const browsers = [
	'last 2 versions',
	'> 5%',
	'ie = 11',
	'not ie <= 10',
	'ios >= 8',
	'and_chr >= 5',
	'Android >= 5',
]
const cssSass = () => {
	return src(srcPath.css)
		.pipe(sourcemaps.init())
		.pipe(
			plumber({
				errorHandler: notify.onError('Error:<%= error.message %>')
			}))
		.pipe(sassGlob())
		.pipe(sass.sync({
			includePaths: ['src/sass'],
			outputStyle: 'expanded'
		})) //指定できるキー expanded compressed
		.pipe(postcss([autoprefixer({ // autoprefixer
			grid: true
		})]))
		.pipe(postcss([
			cssdeclsort({ order: "alphabetical" }),
		]))
		.pipe(mmq()) // media query mapper
		.pipe(sourcemaps.write('./'))
		// .pipe(dest(destPath.css))
		.pipe(dest(destWpPath.css))
		.pipe(notify({
			message: 'Sassをコンパイルしました！',
			onLast: true
		}))
}


//  EJS
const ejs = require("gulp-ejs");
const replace = require("gulp-replace");
const htmlbeautify = require("gulp-html-beautify");

const srcEjsDir = "./ejs";

const ejsCompile = (done) => {
	src([srcEjsDir + "/**/*.ejs", "!" + srcEjsDir + "/**/_*.ejs"])
		.pipe(
			plumber({
				errorHandler: notify.onError(function (error) {
					return {
						message: "Error: <%= error.message %>",
						sound: false,
					};
				}),
			})
		)
		.pipe(ejs({}))
		.pipe(rename({ extname: ".html" }))
		.pipe(replace(/^[ \t]*\n/gim, ""))
		.pipe(
			htmlbeautify({
				indent_size: 4,
				indent_char: " ",
				max_preserve_newlines: 0,
				preserve_newlines: false,
				extra_liners: [],
			})
		)
		// .pipe(dest(destPath.html));
		
	done();
};

// 画像圧縮

const imgImagemin = () => {
	return src(srcPath.img)

		.pipe(
			imagemin(
				[
					imageminMozjpeg({
						quality: 80
					}),
					imageminPngquant(),
					imageminSvgo({
						plugins: [
							{
								removeViewbox: false
							}
						]
					})
				],
				{
					verbose: true
				}
			)
		)
		
		// .pipe(dest(destPath.img))
		.pipe(dest(destWpPath.img))
		.pipe(webp())
		// .pipe(dest(destPath.img))
		.pipe(dest(destWpPath.img))
}

// js圧縮
const jsBabel = () => {
	return src(srcPath.js)
		.pipe(
			plumber(
				{
					errorHandler: notify.onError('Error: <%= error.message %>')
				}
			)
		)
		.pipe(babel({
			presets: ['@babel/preset-env']
		}))
		// .pipe(dest(destPath.js))
		.pipe(
			rename(
				{ extname: '.min.js' }
			)
		)
		// .pipe(dest(destPath.js))
		.pipe(dest(destWpPath.js))
}

// ブラウザーシンク
const browserSyncOption = {
	server: "../../dist/"
}
const browserSyncFunc = () => {
	browserSync.init(browserSyncOption);
}
const browserSyncReload = (done) => {
	browserSync.reload();
	done();
}


const watchFiles = () => {
	watch(srcPath.css, series(cssSass, browserSyncReload))
	watch(srcPath.js, series(jsBabel, browserSyncReload))
	watch(srcPath.img, series(imgImagemin, browserSyncReload))
	watch(srcPath.ejs, series(ejsCompile, browserSyncReload))

}
exports.default = series(series(cssSass, jsBabel, imgImagemin, ejsCompile), parallel(watchFiles, browserSyncFunc));
