<?php if (!defined('ABSPATH')) exit; ?>

<?php

/** agrega los assets (scripts) en wordpress */
add_action("wp_enqueue_scripts", "fsp_assets", 0);

function fsp_assets()
{
  // importa librerias dentro del proyecto como fuera del mismo. Cuando se importa desde otro lado es porque el enlace se rompe al descargarlo
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css?ver=5.9.1", array(), "5.9.1", "all");

  wp_enqueue_style("normalize", get_stylesheet_directory_uri() . "/assets/css/normalize.css", array(), false, "all");
  wp_enqueue_style("swiper.css", "https://unpkg.com/swiper/swiper-bundle.min.css", array(), false, "all");
  wp_enqueue_style("style", get_stylesheet_directory_uri() . "/assets/css/style.css", array("normalize"), false, "all");
  
  // archivos js dentro de assets
  wp_enqueue_script("swiper", "https://unpkg.com/swiper/swiper-bundle.min.js", array(), false, true);
  wp_enqueue_script("script.js", get_stylesheet_directory_uri() . "/assets/js/script.js", array("swiper"), false, true);

}

