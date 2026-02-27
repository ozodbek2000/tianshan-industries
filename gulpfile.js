const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();
const babel = require("gulp-babel");
const imagemin = require("gulp-imagemin");
const rename = require("gulp-rename");
const del = require("del");
const fileInclude = require("gulp-file-include");
const webp = require("gulp-webp");
const webpack = require("webpack-stream");
const webpackConfig = require("./webpack.config.js");

function clean() {
    return del(["dist/**"]);
}

function styles() {
    return src("src/scss/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on("error", sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write("."))
        .pipe(dest("dist/css"))
        .pipe(browserSync.stream());
}

function fonts() {
    return src("src/fonts/**/*.{ttf,woff,woff2,otf}").pipe(dest("dist/fonts"));
}

function scripts() {
    return src("src/js/index.js")
        .pipe(webpack(webpackConfig))
        .pipe(dest("dist/js"))
        .pipe(browserSync.stream());
}

function html() {
    return src("src/html/**/*.html")
        .pipe(
            fileInclude({
                prefix: "@@",
                basepath: "@file",
            })
        )
        .pipe(dest("dist"))
        .pipe(browserSync.stream());
}

async function images() {
    return src(["src/img/**/*.{svg,gif}", "!src/img/no-optimize/**/*"])
        .pipe(imagemin())
        .pipe(dest("dist/img"))
        .pipe(browserSync.stream());
}

async function video() {
    return src("src/video/**/*.{mp4,webm,mov,avi}")
        .pipe(dest("dist/video"))
        .pipe(browserSync.stream());
}

function convertWebp() {
    return src(["src/img/**/*.{jpg,jpeg,png}", "!src/img/no-optimize/**/*"])
        .pipe(webp({ quality: 85 }))
        .pipe(dest("dist/img"))
        .pipe(browserSync.stream());
}

function imagesRaw() {
    return src("src/img/no-optimize/**/*")
        .pipe(dest("dist/img/no-optimize"))
        .pipe(browserSync.stream());
}

function serve() {
    browserSync.init({
        server: {
            baseDir: "dist",
        },
        port: 3000,
        open: true,
    });

    watch("src/scss/**/*.scss", styles);
    watch("src/**/*.html", html);
    watch("src/fonts/**/*", fonts);
    watch("src/img/**/*", series(images, convertWebp, imagesRaw));
    watch("src/video/**/*", video);
    watch("src/js/**/*.js", scripts);
}

const build = series(
    clean,
    parallel(styles, scripts, html, fonts, images, video, convertWebp, imagesRaw)
);

const dev = series(build, serve);

exports.build = build;
exports.default = dev;