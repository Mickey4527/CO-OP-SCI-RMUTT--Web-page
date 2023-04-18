<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head(); ?>
    </head>
	
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->

<nav class="navbar navbar-expand-xl justify-content-center sticky-top bg-white" aria-label="Sixth navbar example">
    <div class="container-fluid">

    <!--Logo-->
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="https://www.rmutt.ac.th/wp-content/uploads/2020/03/20200310-LOGO-RMUTT.png" width="100px"><span class="text-logo sz-24 text-blue">สหกิจศึกษา</span></a>

      <?php get_template_part( 'template-parts/header/site-header' ); ?>
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
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'menu_class'      => 'navbar-nav me-auto mb-2 mb-xl-0',
          'container_class' => 'primary-menu-container',
          'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
          'fallback_cb'     => false,
        )
      );
      ?>

        <form role="search">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
          </div>
        </form>
      </div>
      <?php
endif;?>
    </div>
  </nav>