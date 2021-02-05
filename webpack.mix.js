const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.copyDirectory('resources/vendor/assets', 'public/assets/vendor');

mix.version([
   'public/assets/vendor/mask/js/mask.min.js',
   'public/assets/vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
   'public/assets/vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js',


]).options({ processCssUrls: false });

if (mix.inProduction()) {
   mix.version();
}
