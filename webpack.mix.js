const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/guestApp.js', 'public/js')
    .js('resources/js/adminApp.js', 'public/js')
    .js('resources/js/userApp.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/userApp.scss', 'public/css')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
mix.copy(
    'node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js',
    'public/js'
)
const path = require('path')

mix.webpackConfig({
    stats: {
        children: true
    },
    resolve: {
        symlinks: false,
        alias: {
            vue: path.resolve(`./node_modules/vue`)
        }
    }
})
