const mix = require("laravel-mix");

mix.setPublicPath("public")
    .js("resources/js/app.js", "public/js")
    .sass('resources/scss/app.scss', 'public/css')
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
