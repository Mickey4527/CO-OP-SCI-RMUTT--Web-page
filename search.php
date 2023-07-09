<?php get_header();
  if ( have_posts() ) : ?>

  <div class ="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <?php get_search_form(); ?>
      </div>
      <div class="col-md-12">
            <h1><?php printf( esc_html__( 'Search Results for: %s', 'mix style' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
      </div>
      <div class="col-md-12">
        <div class="row">
        <?php while ( have_posts() ) :
              the_post();
              ?>
              <div class="col-md-3">
              <?php get_template_part( 'template-parts/content/content', 'excerpt' );
              ?>
              </div>
              <?php endwhile; ?>
          </div>
        </div>
        <article class="d-inline-block py-5 text-center">
            <?php the_posts_pagination(
            array(
              'prev_text' => esc_html__( 'Previous', 'mix style' ),
              'next_text' => esc_html__( 'Next', 'mix style' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'mix style' ) . ' </span>',
            )
          ); ?>
          </article>
          <?php else : get_template_part( 'template-parts/content/content', 'none' ); endif; ?>
      </div>
  </div>

<?php get_footer(); ?>