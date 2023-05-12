<?php get_header(); ?>


    <?php if ( have_posts() ) : ?>

    <div class="container mt-2">
      <div class="row">
        <div class="col">
            <h1><?php printf( esc_html__( 'Search Results for: %s', 'mix style' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <article>

          <?php while ( have_posts() ) :
              the_post();
              
              get_template_part( 'template-parts/content/content', 'excerpt' );
              
            endwhile; ?>

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
    </div>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content/content', 'none' ); ?>

    <?php endif; ?>



<?php get_footer(); ?>