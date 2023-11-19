<?php get_header(); ?>


 <?php
        // Start the loop
        while ( have_posts() ) : the_post();

            // Include the post content template

            $cat = get_the_category(); 
            //if array is more than 1
            for($i = 0; $i < count($cat); $i++){
                //Include the post JOB content template. if category is job
                if($cat[$i]->cat_ID == 177){
                    get_template_part( 'template-parts/content/content', 'job' );
                }
                if($cat[$i]->cat_ID != 177 && $i == count($cat)-1){
                    get_template_part( 'template-parts/content/content', 'single' );
                }
            } 

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        // End the loop
        endwhile;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>