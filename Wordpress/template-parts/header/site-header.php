<nav class="navbar navbar-expand-xl justify-content-center sticky-top bg-white" aria-label="Sixth navbar example">
    <div class="container-fluid">

    <!--Logo-->
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="https://www.rmutt.ac.th/wp-content/uploads/2020/03/20200310-LOGO-RMUTT.png" width="100px"><span class="text-logo sz-24 text-blue">สหกิจศึกษา</span></a>


  <?php if (has_nav_menu( 'primary' ) ) : ?>
    <!--Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>

    <!-- Menu bar -->

      <div class="collapse navbar-collapse" id="navbarsExample06">

        <?php
     wp_nav_menu( array(
      'theme_location'  => 'primary',
      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'div',
      'container_class' => 'me-auto',
      'menu_class'      => 'navbar-nav me-auto mb-2 mb-xl-0 fw-bold',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
      ?>

        <!-- Search bar -->

        <?php get_search_form(  ); ?>
       
      </div>
      <?php
    endif;?>
    </div>
  </nav>