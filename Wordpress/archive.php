<?php get_header(); ?>

<div class="container">
  <div class="row">
    <article>
      <?php the_archive_title( '<h1>', '</h1>' ); ?>
      <?php if ( $description ) : ?>
        <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
      <?php endif; ?>
    </article>
    <article>
      <?php

        while (have_posts()) :
        get_template_part( 'template-parts/content/content-excerpt' ); 
      
      endwhile;?>
      </article>
    </div>
</div>

<?php get_footer(); ?>