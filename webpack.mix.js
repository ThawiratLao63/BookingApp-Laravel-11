const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.postCss('resources/css/app.css', 'public/css', [
  require('tailwindcss'),
]);
