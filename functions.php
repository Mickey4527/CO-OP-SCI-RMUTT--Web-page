<?php
//  _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
// |                                           |
// |             Global function               |
// |_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _|
//


// Config variables
define( 'MIXSTYLE_ROOTURI', get_template_directory() );
define( 'MIXSTYLE_ROOTDIR', dirname( __FILE__ ) );

// Load components
require_once( MIXSTYLE_ROOTDIR . '/inc/news_feed.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/config.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/menu_feed.php' );

// Configuring the theme support
add_theme_support( 'menus' );             // Enable menus
add_theme_support( 'custom-header' );     // Enable custom header
add_theme_support( 'post-thumbnails' );   // Enable post thumbnails
add_theme_support( 'custom-logo' );       // Enable custom logo
add_theme_support( 'custom-background' ); // Enable custom background
add_theme_support( 'responsive-embeds' ); // Enable responsive embeds
add_theme_support( 'title-tag' );         // Enable title tag
add_theme_support( 'wp-block-styles' );   // Add support for Block Styles.