<?php get_header(); ?>


    <?php if ( have_posts() ) : ?>
<div class="container">
  <div class="row">
    <div class="col">
        <h1 class="display-5"><?php printf( esc_html__( 'Search Results for: %s', 'mix style' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-2">
      <?php get_sidebar(); ?>
      </div>
      <div class="col-9">

      <?php /* Start the Loop */ ?>
      <?php //while ( have_posts() ) : the_post(); ?>
        <?php
          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content/content', 'search' );
        ?>
      <?php //endwhile; ?>

      

      <?php the_posts_pagination(
			array(
				'prev_text' => esc_html__( 'Previous', 'twentytwentyone' ),
				'next_text' => esc_html__( 'Next', 'twentytwentyone' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'twentytwentyone' ) . ' </span>',
			)
		); ?>
      </div>
    </div>
</div>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content/content', 'none' ); ?>

    <?php endif; ?>



<?php get_footer(); ?>