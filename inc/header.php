<?php
/**
 * 
 * @package MIX
 * @since MIX 2.0
 */


function robots(){
    echo '<meta name="robots" content="index, follow">'."\n";
}
function meta_description(){
    echo '<meta name="description" content="'.get_the_excerpt().'">'."\n";
}
function meta_keywords(){
    echo '<meta name="keywords" content="'.get_the_tags().'">'."\n";
}
function meta_author(){
    echo '<meta name="author" content="'.get_the_author().'">'."\n";
}
function meta_title(){
    echo '<meta name="title" content="'.get_the_title().'">'."\n";
}
function og_image(){
    echo '<meta property="og:image" content="'.get_the_post_thumbnail_url().'">'."\n";
}
function og_url(){
    echo '<meta property="og:url" content="'.get_the_permalink().'">'."\n";
}
function og_type(){
    echo '<meta property="og:type" content="website">'."\n";
}
function og_title(){
    echo '<meta property="og:title" content="'.get_the_title().'">'."\n";
}
function og_description(){
    echo '<meta property="og:description" content="'.get_the_excerpt().'">'."\n";
}
function og_site_name(){
    echo '<meta property="og:site_name" content="'.get_bloginfo('name').'">'."\n";
}
function og_locale(){
    echo '<meta property="og:locale" content="th_TH">'."\n";
}
function og_image_width(){
    echo '<meta property="og:image:width" content="1200">'."\n";
}
function og_image_height(){
    echo '<meta property="og:image:height" content="630">'."\n";
}


add_action('wp_head', 'robots');
add_action('wp_head', 'meta_description');
add_action('wp_head', 'meta_keywords');
add_action('wp_head', 'meta_author');
add_action('wp_head', 'meta_title');
add_action('wp_head', 'og_image');
add_action('wp_head', 'og_url');
add_action('wp_head', 'og_type');
add_action('wp_head', 'og_title');
add_action('wp_head', 'og_description');
add_action('wp_head', 'og_site_name');
add_action('wp_head', 'og_locale');
add_action('wp_head', 'og_image_width');
add_action('wp_head', 'og_image_height');

?>