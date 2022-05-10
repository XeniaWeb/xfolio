const mix = require('laravel-mix');
const webpackNodeExternals = require('webpack-node-externals');

mix.js('resources/js/ssr.js', 'public/js')
    .vue({
        version: 3,
        useVueStyleLoader: true,
        options: { optimizeSSR: true },
    })
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .alias({
        '@': 'resources/js',
        '@@': 'resources/assets/images',
        ziggy: 'vendor/tightenco/ziggy/dist/index',
    })
    .webpackConfig({
        target: 'node',
        externals: [webpackNodeExternals()],
    });
