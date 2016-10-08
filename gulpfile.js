const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    mix
       .copy(
 		'node_modules/materialize-sass-origin/sass',
 		'resources/assets/sass/materialize'
 	).copy(
 		'node_modules/materialize-sass-origin/font',
 		'public/font'
 	).copy(
            'node_modules/materialize-sass-origin/js/bin/materialize.js',
            'public/js/materialize.js'
      )
      .webpack('app.js')
      .sass('app.scss');
});
