<?php get_header(); 
include get_template_directory() . '/template-parts/content/content-search.php';
?>

<div class ="container-fluid py-5 border-bottom border-2">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <?php get_search_form(); ?>
      </div>
  </div>
</div>

  <div class="container py-5">
      <div class="row">
          <?php listcontent(); ?>
      </div>
  </div>

<?php get_footer(); ?>