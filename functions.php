<?php
/**
 * MIX Theme, copyright
 * File Description: This file contains the configuration settings for the theme.
 * 
 * @package MIX
 * @since MIX 1.0
 */


// Config variables
define( 'MIXSTYLE_ROOTURI', get_template_directory());
define( 'MIXSTYLE_ROOTDIR', dirname( __FILE__ ) );

// Load components
require_once( MIXSTYLE_ROOTDIR . '/config.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/feeds.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/config.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/navbar.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/theme/theme.php' );
require_once( MIXSTYLE_ROOTDIR . '/inc/header.php' );


// Configuring the theme support
add_theme_support( 'menus' );             // Enable menus
add_theme_support( 'custom-header' );     // Enable custom header
add_theme_support( 'post-thumbnails' );   // Enable post thumbnails
add_theme_support( 'custom-logo' );       // Enable custom logo
add_theme_support( 'custom-background' ); // Enable custom background
add_theme_support( 'responsive-embeds' ); // Enable responsive embeds
add_theme_support( 'title-tag' );         // Enable title tag
add_theme_support( 'wp-block-styles' );   // Add support for Block Styles.

// Configuring the theme
add_action('admin_menu', 'config_theme_function'); // Add sub menu