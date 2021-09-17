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
.sass('resources/sass/marketplace.scss', 'public/css/marketplace.css')
.sass('resources/sass/masculine.scss', 'public/css/masculine.css')
.sass('resources/sass/feminine.scss', 'public/css/feminine.css')
.sass('resources/sass/neutral.scss', 'public/css/neutral.css');

mix.version();
