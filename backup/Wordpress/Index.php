<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

 <!--body-->
 <?php
if ( have_posts() ) :

    // Include the post content template
    get_template_part( 'template-parts/content/content');

else :
	// If no content, include the "No posts found" template.
	?>
    <h1>No posts found</h1>    
<?php
    endif;
    
get_footer(); ?>