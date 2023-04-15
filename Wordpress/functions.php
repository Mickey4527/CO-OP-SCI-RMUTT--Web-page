<?php
function custom_theme_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
  wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );


?>