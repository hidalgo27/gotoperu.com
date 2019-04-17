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
   .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css');

mix.scripts([
    'node_modules/venobox/venobox/venobox.min.js',
    'resources/assets/js/vendors/jquery-migrate-3.0.0.min.js',
    'resources/assets/js/vendors/viedolightbox/video.js',
    'resources/assets/js/vendors/jquery.waypoints.min.js',
    'resources/assets/js/vendors/smooth-scroll.js',
    'node_modules/swiper/dist/js/swiper.min.js',
    'node_modules/feather-icons/dist/feather.js',
    //Customized
    'node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js',
    'node_modules/intl-tel-input/src/js/data.js',
    'node_modules/intl-tel-input/build/js/intlTelInput.js',
    'node_modules/intl-tel-input/build/js/utils.js',
    'node_modules/owl.carousel/dist/owl.carousel.min.js',
    'node_modules/vanilla-lazyload/dist/lazyload.min.js',
    'resources/assets/js/vendors/function.js'
], 'public/js/plugins.js');

mix.scripts([
    'node_modules/feather-icons/dist/feather.js',
    'node_modules/bootstrap4-toggle/js/bootstrap4-toggle.js',
    'node_modules/bootstrap-select/js/bootstrap-select.js',
    'node_modules/bootstrap-select/js/i18n/defaults-es_US.js',
    'node_modules/swiper/dist/js/swiper.min.js',
    'node_modules/dropzone/dist/min/dropzone.min.js',

    'resources/assets/js/vendors/function-admin.js',
], 'public/js/plugins-admin.js');


if (mix.config.inProduction) {
    mix.version();
}
