<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php the_archive_title( '<h1 class="py-5">', '</h1>' ); ?>
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9">
          <div class="row">
            <?php
              while (have_posts()) :
              the_post();
              echo '<div class="col-md-4">';
              get_template_part( 'template-parts/content/content-excerpt' ); 
              echo '</div>';
            endwhile;?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 d-flex">
      <?php the_posts_pagination(
            array(
              'prev_text' => esc_html__( 'Previous', 'mix style' ),
              'next_text' => esc_html__( 'Next', 'mix style' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'mix style' ) . ' </span>',
            )
          ); ?>
    </div>
  </div>
</div>	  

<?php get_footer(); ?>

