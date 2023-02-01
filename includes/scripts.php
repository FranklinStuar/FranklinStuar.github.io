<?php if (!defined('ABSPATH')) exit; ?>

<?php

/** add assets (scripts) to wordpress */
add_action("wp_enqueue_scripts", "fsp_assets", 0);

function fsp_assets()
{
  wp_enqueue_style("normalize", get_stylesheet_directory_uri() . "/assets/css/normalize.css", array(), false, "all");
  wp_enqueue_style("style", get_stylesheet_directory_uri() . "/assets/css/style.css", array("normalize"), false, "all");
  
  // js files into assets
  wp_enqueue_script("script.js", get_stylesheet_directory_uri() . "/assets/js/script.js", array(), false, true);

}

