<?php get_header(); ?>

<div class="container">
  <div class="row">
<?php

while (have_posts()) :
 get_template_part( 'template-parts/content/content-excerpt' ); 
 
endwhile;?>
    </div>
</div>

<?php get_footer(); ?>