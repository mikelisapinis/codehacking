let mix = require('laravel-mix');

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

mix.scripts([

     'resources/assets/js/require.js',
     'resources/assets/js/app.js',
     'resources/assets/js/bootstrap.js',
     'resources/assets/js/jquery.js',
     'resources/assets/js/metisMenu.js',
     'resources/assets/js/sb-admin-2.js'

], path.normalize('./public/js/libs.js'));

mix.styles([

     'resources/assets/css/blog-post.css',
     'resources/assets/css/bootstrap.css',
     'resources/assets/css/font-awesome.css',
     'resources/assets/css/metisMenu.css',
     'resources/assets/css/sb-admin-2.css',
     'resources/assets/css/styles.css'

], path.normalize('./public/css/libs.css'));
