// webpack.mix.js

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css');