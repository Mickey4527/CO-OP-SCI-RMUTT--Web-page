<?php
/**
 * Template Name: Job pages
 * Template Post Type: post, page, product
 * 
 * @package MIX
 * @since MIX 1.0
 * 
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	
	the_post();
	// Include the single post content template.
	get_template_part( 'template-parts/content/content', 'job' );

endwhile; 

get_footer();
?>