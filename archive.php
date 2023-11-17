<?php get_header(); ?>

<div style="height: 12.2rem; width:100%; background: var(--color-organ-600);"></div>

<div class="container pt-3 pb-5">
  <div class="row">
    <div class="col-md-12">
      <?php the_archive_title( '<h1 class="py-5">', '</h1>' ); ?>
    </div>

    <div class="col-md-12">
      <div class="row">
        <?php
          if ( have_posts() ){
            while ( have_posts() ){
                the_post();
                archive_card();
              }
            }
            else{
              get_template_part( 'template-parts/content/content', 'none' );
            }       
          ?>
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

