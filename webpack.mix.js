const mix = require('laravel-mix');
require('laravel-mix-serve');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix
  .copyDirectory('src/assets', 'tfa/assets')
  .js('src/scripts/app.js', 'tfa/assets/scripts/')
  .sass('src/styles/app.scss', 'assets/styles/')
  .options({
    processCssUrls: false,
    autoprefixer: {
      options: {
        browsers: [
          'chrome <= 60, last 2 firefox versions, last 2 safari versions'
        ],
        grid: true
      }
    }
  })
  .sourceMaps()
  .setPublicPath('tfa')
  .browserSync({
    proxy: '127.0.0.1:5000',
    files: [
      'tfa/**/*'
    ]
  })
  .serve('php -S 127.0.0.1:5000 -t ./tfa', {
      verbose: true,
      watch: true,
      dev: true,
      prod: false
  })
  .webpackConfig({
    devtool: 'source-map',
    resolve: {
      modules: [
        'src/scripts',
        'node_modules'
      ]
    },
  });

// disable manifest
Mix.manifest.refresh = function(){ return void(0); };
