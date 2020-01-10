const mix = require('laravel-mix');

mix.copyDirectory('node_modules/@mdi/font/fonts', 'resources/build/fonts');

mix.options({
    processCssUrls: false
}).sass('resources/styles/module.scss', 'resources/build/module.min.css').options({
    postCss: [
        require('autoprefixer')(),
    ]
});