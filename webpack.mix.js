const mix = require("laravel-mix");
mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css/sass.css")
    .styles(
        [
            "resources/css/mdb.css",
            "resources/css/bootstrap.css",
            "public/css/sass.css"
        ],
        "public/css/app.css"
    );
//change for branch v1