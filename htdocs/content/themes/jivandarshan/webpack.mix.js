let mix = require('laravel-mix');
mix.setPublicPath('dist');
mix.setResourceRoot(path.normalize("..") + "/");
mix.js("assets/js/theme.js", 'dist/js').sass("assets/sass/theme.scss", 'dist/css').options({
    processCssUrls: false
});