<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
endwhile; 

get_footer();
?>