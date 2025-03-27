const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const browserSync = require("browser-sync").create();
const header = require("gulp-header");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const pkg = require("./package.json");

// Banner
const banner = `/*!
 * Start Bootstrap - ${pkg.title} v${pkg.version} (${pkg.homepage})
 * Copyright 2013-${new Date().getFullYear()} ${pkg.author}
 * Licensed under ${pkg.license} (https://github.com/BlackrockDigital/${
  pkg.name
}/blob/master/LICENSE)
 */
`;

// Compila SCSS para CSS
function sassTask() {
  return gulp
    .src("scss/freelancer.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(header(banner, { pkg }))
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
}

// Minifica o CSS
function minifyCss() {
  return gulp
    .src("css/freelancer.css")
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
}

// Minifica o JS
function minifyJs() {
  return gulp
    .src("js/freelancer.js")
    .pipe(uglify())
    .pipe(header(banner, { pkg }))
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("js"))
    .pipe(browserSync.stream());
}

// Copia arquivos para a pasta vendor
function copyFiles() {
  return Promise.all([
    gulp
      .src([
        "node_modules/bootstrap/dist/**/*",
        "!**/npm.js",
        "!**/bootstrap-theme.*",
        "!**/*.map",
      ])
      .pipe(gulp.dest("vendor/bootstrap")),

    gulp
      .src([
        "node_modules/jquery/dist/jquery.js",
        "node_modules/jquery/dist/jquery.min.js",
      ])
      .pipe(gulp.dest("vendor/jquery")),

    gulp
      .src([
        "node_modules/popper.js/dist/umd/popper.js",
        "node_modules/popper.js/dist/umd/popper.min.js",
      ])
      .pipe(gulp.dest("vendor/popper")),

    gulp
      .src(["node_modules/jquery.easing/*.js"])
      .pipe(gulp.dest("vendor/jquery-easing")),

    gulp
      .src([
        "node_modules/font-awesome/**",
        "!node_modules/font-awesome/**/*.map",
        "!node_modules/font-awesome/.npmignore",
        "!node_modules/font-awesome/*.txt",
        "!node_modules/font-awesome/*.md",
        "!node_modules/font-awesome/*.json",
      ])
      .pipe(gulp.dest("vendor/font-awesome")),
  ]);
}

// Configura o BrowserSync
function browserSyncTask(done) {
  browserSync.init({
    server: { baseDir: "" },
  });
  done();
}

// Watch para mudanças
function watchFiles() {
  gulp.watch("scss/*.scss", sassTask);
  gulp.watch("css/*.css", minifyCss);
  gulp.watch("js/*.js", minifyJs);
  gulp.watch("*.html").on("change", browserSync.reload);
  gulp.watch("js/**/*.js").on("change", browserSync.reload);
}

// Tarefas principais
const build = gulp.series(
  gulp.parallel(sassTask, minifyCss, minifyJs, copyFiles)
);
const dev = gulp.series(build, gulp.parallel(browserSyncTask, watchFiles));

// Exporta tarefas
exports.sass = sassTask;
exports.minifyCss = minifyCss;
exports.minifyJs = minifyJs;
exports.copy = copyFiles;
exports.build = build;
exports.dev = dev;
exports.default = build;
