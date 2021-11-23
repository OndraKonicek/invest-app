const mix = require("laravel-mix");
require("dotenv").config();
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    processCssUrls: false,
});

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: "source-map",
    }).sourceMaps();
}

// ADD YOUR COMPILED ASSETS HERE
mix.sass("resources/css/app.scss", "public/css");
mix.js("resources/js/chart/index.js", "public/js/chart.js").react(); // example React app compilation
mix.js(
    "resources/js/deposits-popup/deposits-popup.js",
    "public/js/deposits-popup.js"
).react(); // example React app compilation
mix.js("resources/js/modal/index.js", "public/js/modal.js").react(); // example React app compilation

mix.browserSync({
    host: "localhost",
    port: 3000,
    proxy: {
        target: process.env.APP_URL, // Yay! Using APP_URL from the .env file!
    },
});

// add versioning
mix.version();
