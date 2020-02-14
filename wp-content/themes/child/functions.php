<?php /*

  This file is part of a child theme called child.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read https://codex.wordpress.org/Child_Themes.

*/

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

require_once 'enqueue-scripts.php';

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */ 
