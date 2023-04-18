<?php

add_theme_support( 'post-thumbnails' );

function custom_theme_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
  wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
  wp_enqueue_script( 'bootstrapjsbundlemin', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_thumbnail_id ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}

?>