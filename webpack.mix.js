let mix = require('laravel-mix');
let path = require('path');

require('mix-tailwindcss');

mix.setPublicPath(path.resolve('./'));

mix.js('resources/js/app.js', 'js');

mix.postCss("resources/css/app.css", "css").tailwind();;


mix.options({
    postCss: [
        require('postcss-nested-ancestors'),
        require('postcss-nested'),
        require('postcss-import'),
        require('@tailwindcss/jit'),
        require('autoprefixer'),
    ]
});

// mix.browserSync({
//     proxy: 'http://site.local',
//     host: 'localhost',
//     open: 'external',
//     port: 8000
// });

mix.version();