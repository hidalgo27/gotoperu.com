let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
    'resources/assets/js/vendors/jquery-migrate-3.0.0.min.js',
    'resources/assets/js/vendors/viedolightbox/video.js',
    'resources/assets/js/vendors/jquery.waypoints.min.js',
    'resources/assets/js/vendors/smooth-scroll.js',
    'resources/assets/js/vendors/jquery-ui.js',
    'node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js',
    // 'resources/assets/js/vendors/all.js',
    //Customized
    'resources/assets/js/vendors/function-admin.js',
    'resources/assets/js/vendors/function.js'
], 'public/js/plugins.js');


if (mix.config.inProduction) {
    mix.version();
}