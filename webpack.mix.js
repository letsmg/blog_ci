const mix = require('laravel-mix');

mix//.js('resources/js/app.js', 'js/principal.js')
    .copy('node_modules/jquery/dist/jquery.min.js','js/jquery.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js','js/bootstrap.js')    
    .copy('node_modules/font-awesome/fonts/','fonts/')    
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css', 
        'node_modules/font-awesome/css/font-awesome.min.css', 
    ],'css/principal.css');
    