// gulpfile.js
const gulp = require("gulp");
const sass = require("gulp-sass");
const plumber = require("gulp-plumber");
const autoprefixer = require("gulp-autoprefixer");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const sourcemaps = require("gulp-sourcemaps");

function css() {
    console.log('css');
  return gulp
    .src([
    //   "node_modules/bootstrap/scss/bootstrap.scss",
      // "node_modules/owl.carousel/dist/assets/owl.carousel.min.css",
      // "node_modules/owl.carousel/dist/assets/owl.theme.default.min.css",
      // "node_modules/basiclightbox/dist/basicLightbox.min.css",
      "scss/main.scss"
    ])
    .pipe(plumber())
    .pipe(
      sass
        .sync({
          outputStyle: "compressed",
          precision: 10,
          includePaths: [".", "node_modules"]
        })
        .on("error", sass.logError)
    )
    .pipe(
      autoprefixer({
        cascade: false,
        overrideBrowserslist: require("./package.json").browserslist
      })
    )
    .pipe(concat("main.css"))
    .pipe(gulp.dest("src"))
}

// script paths
var jsVendorFiles = [
    "node_modules/jquery/dist/jquery.min.js",
    "node_modules/popper.js/dist/umd/popper.min.js",
    "node_modules/bootstrap/dist/js/bootstrap.min.js",
    // "node_modules/basiclightbox/dist/basicLightbox.min.js",
    // "node_modules/owl.carousel/dist/owl.carousel.min.js",
    // "node_modules/google-maps/lib/Google.min.js",
    "js/vendor/*.js"
  ],
  jsAppFiles = ["js/*.js", 'js/blocks/*.js', 'js/components/*.js'],
  jsDest = "src/js";
  jsDestFiles = "src/js/*.js";

function vendorScripts() {
  return (
    gulp
      .src(jsVendorFiles)
      .pipe(sourcemaps.init())
      .pipe(concat("vendor.js"))
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(jsDest))
  );
}

function mainScripts() {
  return (
    gulp
    .src(jsAppFiles)
    .pipe(sourcemaps.init())
    .pipe(concat("main.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(jsDest))
  );
}


// Watch files
function watchFiles() {
  console.log('watch files');
  gulp.watch("scss/**/*.scss", gulp.parallel(css));
  gulp.watch("js/**/*.js", gulp.parallel(vendorScripts, mainScripts));
}

// define complex tasks
const build = gulp.parallel(css, vendorScripts, mainScripts, watchFiles);
const watch = gulp.parallel(css, watchFiles);

// exports
exports.build = build;
exports.watch = watch;
exports.default = watch;