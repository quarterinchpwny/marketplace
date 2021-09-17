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
<<<<<<< HEAD
.sass('resources/sass/masculine.scss', 'public/css/masculine.css')
.sass('resources/sass/feminine.scss', 'public/css/feminine.css');
=======
.sass('resources/sass/feminine.scss', 'public/css/feminine.css')
.sass('resources/sass/neutral.scss', 'public/css/neutral.css');
>>>>>>> 261e8d031b9d5051ff901f2d55c5bfedb24c7504

mix.version();
