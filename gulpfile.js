(() => {

  'use strict';

  //** Gulp.js 4 configuration **//
  const
    // Modules
    gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    autoprefixer  = require('gulp-autoprefixer'),
    minifycss     = require('gulp-uglifycss'),
    browsersync   = require('browser-sync').create(),
    wpPot         = require('gulp-wp-pot'),
    sort          = require('gulp-sort'),
    notify        = require('gulp-notify'),

    // Directory Locations
    dir = {
      sassSrc    : './assets/sass/style.sass',
      sassDir    : './assets/sass/**/*.sass',
      cssDest    : './assets/css/',
      phpSrc     : './**/*.php',
      projectUrl : 'localhost/dimack'
    },

    // Tranlate Settings
    translateOpts = {
      textDomain     : 'ccs',
      destFile       : 'ccs.pot',
      destDir        : './languages',
      packageName    : 'ccs',
      bugReport      : 'https://crew.pt/contact/',
      lastTranslator : 'Pedro Protest <dev@crew.pt>',
      team           : 'Crew <info@crew.pt>'
    },

    // CSS Settings
    cssOpts = {
      src         : dir.sassSrc,
      watch       : dir.sassDir,
      build       : dir.cssDest,
      sassOpts : {
        outputStyle     : 'nested',
        precision       : 3,
        errLogToConsole : true
      },
    },

    // Server Settings
    browserSyncConfig = {
      proxy         : dir.projectUrl,
      port          : 8000,
      open          : true,
      injectChanges : true
    },

    // Autoprefixer Settings
    autoPrefixerOpts = [
      'last 2 version',
      '> 1%',
      'ie >= 9',
      'ie_mob >= 10',
      'ff >= 30',
      'chrome >= 34',
      'safari >= 7',
      'opera >= 23',
      'ios >= 7',
      'android >= 4',
      'bb >= 10'
    ];

  // - CSS Task - //
  function css() {
    sass.compiler = require('node-sass');
    return gulp.src(cssOpts.src)
      .pipe(sass(cssOpts.sassOpts).on('error', sass.logError))
      .pipe(autoprefixer( autoPrefixerOpts ))
      .pipe(minifycss( { maxLineLen: 10 }))
      .pipe(gulp.dest(cssOpts.build))
      .pipe(browsersync.reload({ stream: true }))
      .pipe(notify({message: 'TASK: CSS Completed! 💯', onLast: true } ));

  }
  exports.css = gulp.series(css);

  // - Translate - //
  function translate() {
    return gulp.src(dir.phpSrc)
      .pipe(sort())
      .pipe(wpPot( {
          domain         : translateOpts.textDomain,
          package        : translateOpts.packageName,
          bugReport      : translateOpts.bugReport,
          lastTranslator : translateOpts.lastTranslator,
          team           : translateOpts.team
      } ))
      .pipe(gulp.dest(translateOpts.destDir + '/' + translateOpts.destFile ))
      .pipe(notify({message: 'TASK: "translate" Completed! 💯', onLast: true }));
  }
  exports.translate = gulp.series(translate);

  // - Server Task (Private) - //
  function server(done) {
    if (browsersync) browsersync.init(browserSyncConfig);
    done();
  }

  // - Watch Task - //
  function watch(done) {
    gulp.watch(cssOpts.watch, css); // CSS changes
    gulp.watch(dir.phpSrc); // PHP changes
    done();
  }

  //** Default Tasks **//
  exports.default = gulp.series(exports.css, exports.translate, watch, server);

})();
