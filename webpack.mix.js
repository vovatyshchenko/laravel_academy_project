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
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'resources/js/fix_bootstrap_carousel.js',
    'resources/js/header_collapse.js',
], 'public/js/main.js');

mix.styles([
    'resources/sass/common.scss',
], 'public/css/common.css');

mix.styles([
    'resources/sass/index.scss'
], 'public/css/main.css');
