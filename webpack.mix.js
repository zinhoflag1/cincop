const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix

    .sass('resources/views/scss/style.scss', 'public/site/css/style.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/site/js/jquey.js');