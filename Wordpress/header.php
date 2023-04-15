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

<nav class="navbar navbar-expand-xl justify-content-center bg-white navbar-white sticky-top" aria-label="Sixth navbar example">
    <div class="container-fluid">

    <!--Logo-->
      <a class="navbar-brand" href="#"><img src="https://www.rmutt.ac.th/wp-content/uploads/2020/03/20200310-LOGO-RMUTT.png" width="100px"><span class="text-logo sz-24 text-blue">สหกิจศึกษา</span></a>

  <?php if (has_nav_menu( 'primary' ) ) : ?>
    <!--Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <i class="material-icons md-24 black200">menu</i>
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
              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="material-icons md-24 black200">search</i></button>
          </div>
        </form>
      </div>
      <?php
endif;?>
    </div>
  </nav>