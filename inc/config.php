<?php

// Enqueueing styles and scripts
function custom_theme_styles() {
    wp_enqueue_style   ('bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style   ('custom-style', get_stylesheet_uri() );
    wp_register_script ('main_scripts', get_theme_file_uri('index.js'));
    wp_enqueue_script  ('main_scripts');
    wp_enqueue_script  ('bootstrapjs-bundle-min', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );


// Remove width and height attributes from post thumbnails
function remove_thumbnail_dimensions( $html, $post_id, $post_thumbnail_id ) { return $html = preg_replace( '/(width|height)="\d*"\s/', "", $html ); }
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );


// Registering menus
function register_my_menus() {
  register_nav_menus(
    array(
            'primary' => __( 'เมนูหลัก (Primary Menu)' ),
		    'secondary' => __('เมนูรอง (Secondary Menu)'),
        )
  );
}
add_action( 'init', 'register_my_menus' );


//register navwalker
function register_navwalker(){ require_once get_template_directory() . '/inc/bs5navwalker.php'; }
add_action( 'after_setup_theme', 'register_navwalker' );

//config title logo
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


// Creating the widget
function mytheme_widgets_init() {
    register_sidebar(array(
        'name' => 'Video tab',
        'id' => 'videotab-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

// Register the Archives widget
function mytheme_register_archives_widget() { register_widget('WP_Widget_Archives'); }
add_action('widgets_init', 'mytheme_register_archives_widget');

// Register the Recent Posts widget
function mytheme_register_recent_posts_widget() { register_widget('WP_Widget_Recent_Posts');}
add_action('widgets_init', 'mytheme_register_recent_posts_widget');

?>