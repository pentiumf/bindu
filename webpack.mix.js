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
   .mix.combine(['resources/assets/css/animate.min.css', 'resources/assets/css/font-awesome.min.css', 'resources/assets/css/ionicons.css', 'resources/assets/css/owl.carousel.min.css'], 'public/css/libs.css')
   .mix.combine(['resources/assets/js/jquery.min.js', 'resources/assets/js/jquery.validate.min.js' , 'resources/assets/js/owl.carousel.min.js'], 'public/js/libs.js');
