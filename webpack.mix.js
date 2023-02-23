const mix = require("laravel-mix");

require("laravel-mix-tailwind");
require("laravel-mix-purgecss");


mix
  .js("resources/js/app.js", "public/js")
  .sass("resources/scss/app.scss", "public/css")
  .tailwind("./tailwind.config.js")
  .purgeCss()
  .sourceMaps();

mix
  .js("resources/js/canvas-ui/app.js", "public/js/canvas-ui.js")
  .sass("resources/sass/canvas-ui.scss", "public/css/canvas-ui.css");