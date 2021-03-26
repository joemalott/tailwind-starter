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
//     watch: true,
//     files: [
//         './**/*.php',
//         './**/*'
//     ],
//     proxy: {
//         target: "http://your-site.local/",
//         ws: true,
//     },
// });


mix.version();
