<?php get_header(); ?>

<div class="container mt-5 mb-5">
  <div class="row">
	  <article>
		  <?php the_archive_title( '<h2>', '</h2>' ); ?>
    </article>
	  
    <article>
      <?php
        while (have_posts()) :
        the_post();
        get_template_part( 'template-parts/content/content-excerpt' ); 
      
      endwhile;?>
      </article>
    </div>
</div>

<?php get_footer(); ?>

