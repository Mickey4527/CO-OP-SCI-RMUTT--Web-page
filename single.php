<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop
        while ( have_posts() ) : the_post();

            // Include the post content template
            get_template_part( 'template-parts/content/content', 'single' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        // End the loop
        endwhile;
        ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>