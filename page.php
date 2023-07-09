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
	// Include the single post content template.
	get_template_part( 'template-parts/content/content', 'page' );

endwhile; 

get_footer();
?>