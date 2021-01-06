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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
    ], 'public/css/bibliotecas/bootstrap.min.css')
    .scripts([
        'resources/js/home/home.js'
    ], 'public/js/home/home.js')
    .scripts([
        'node_modules/jquery/dist/jquery.js',
    ], 'public/js/bibliotecas/jquery.js')
    .scripts([
        'node_modules/bootstrap/dist/js/bootstrap.js'
    ], 'public/js/bibliotecas/bootstrap.js')
    .scripts([
        'node_modules/popper.js/dist/popper.js'
    ], 'public/js/bibliotecas/popper.js')


.version()
    ///////resources\js\home\home.js