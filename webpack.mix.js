const mix = require("laravel-mix");

mix
  .js("resources/js/app.js", "public/js")
  .react({
    extractStyles: true
  })
  .css("resources/css/app.css", "public/css");

mix.version();
