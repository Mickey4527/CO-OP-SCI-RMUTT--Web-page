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
      <article class="d-inline-block py-5 text-center">
            <?php the_posts_pagination(
            array(
              'prev_text' => esc_html__( 'Previous', 'mix style' ),
              'next_text' => esc_html__( 'Next', 'mix style' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'mix style' ) . ' </span>',
            )
          ); ?>
      </article>
    </div>
</div>

<?php get_footer(); ?>

