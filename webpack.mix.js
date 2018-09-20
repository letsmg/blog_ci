const mix = require('laravel-mix');

mix.sass('scss/geral/diversos.scss', 'scss/geral/css/diversos.css')
    .sass('scss/geral/margens.scss', 'scss/geral/css/margens.css')
    .copy('node_modules/jquery/dist/jquery.min.js','js/jquery.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js','js/bootstrap.js')    
    .copy('node_modules/font-awesome/fonts/','fonts/')    
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css', 
        'node_modules/font-awesome/css/font-awesome.min.css', 
        'scss/geral/css/diversos.css', 
        'scss/geral/css/margens.css', 
    ],'css/principal.css');
    