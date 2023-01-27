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

mix.js('resources/admin/app.js', 'public/admin/js/app.js')
    .styles([
        'resources/admin/assets/css/dropify.min.css',
        'resources/admin/assets/css/main.css',
        'resources/admin/assets/css/theme1.css'
    ], 'public/admin/css/app.css');
