var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var bpath = 'vendor/bootstrap-sass/assets';
    var jqueryPath = 'vendor/jquery';
    mix.sass('app.scss')
        .copy(jqueryPath + "/dist/jquery.min.js", 'public/js')
        .copy(bpath + '/fonts/bootstrap/*', 'public/fonts')
        .copy(bpath + '/javascripts/bootstrap.min.js', 'public/js')
        .version(['css/app.css', 'js/bootstrap.min.js', 'js/jquery.min.js'])
});
