<?php

// Configuring the theme support
add_theme_support( 'menus' ); // Enable menus
add_theme_support( 'custom-header' ); // Enable custom header
add_theme_support( 'post-thumbnails' ); // Enable post thumbnails
add_theme_support( 'custom-logo' ); // Enable custom logo
add_theme_support( 'custom-background' );// Enable custom background
add_theme_support( 'responsive-embeds' ); // Enable responsive embeds


// Enqueueing styles and scripts

function custom_theme_styles() {
  wp_enqueue_style( 'bootstrapmin', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
  wp_register_script('main_scripts', get_theme_file_uri('index.js'));
  wp_enqueue_script('main_scripts');
  wp_enqueue_script( 'bootstrapjsbundlemin', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );


// Remove width and height attributes from post thumbnails
function remove_thumbnail_dimensions( $html, $post_id, $post_thumbnail_id ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );


// Registering menus
function register_my_menus() {
  register_nav_menus(
    array(
        'primary' => __( 'เมนูหลัก (Primary Menu)' ),
      )
  );
}

add_action( 'init', 'register_my_menus' );


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function themename_custom_logo_setup() {
	$defaults = array(
		'width'                => 100,
    'height'               => 45,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>