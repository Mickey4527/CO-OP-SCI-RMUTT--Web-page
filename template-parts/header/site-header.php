<?Php
// config logo
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo           = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<!--secondary menu-->
<nav class="bg-gradient-organ-royal text-white mobile-hide z-3 position-relative">
    <div class="container d-flex flex-wrap align-items-center">
		<?php 
    // if enable header text
      if( has_custom_logo() && display_header_text()==true ) : echo '<span class="text-logo text-white">'.get_bloginfo( 'name' ).'</span>'; endif;
		// if enable secondary menu
      if (has_nav_menu( 'secondary' ) ) : 

		    wp_nav_menu( array(
		                    'theme_location'  => 'secondary',
		                    'depth'           => 3, 
		                    'container'       => 'div',
		                    'container_class' => 'ms-auto',
		                    'menu_class'      => 'navbar-nav secondary me-auto',
		                    'fallback_cb'     => '__return_false',
		                    'walker'          => new bootstrap_5_wp_nav_menu_walker(),
                        ) 
                      );
        endif;?>
    </div>
 </nav>

 <!--primary menu-->
<nav class="navbar bg-white navbar-expand-xl text-dark" aria-label="navbarPrimary" id="header-navbar">
	<div class="container">
    <!--Logo-->
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
		  <?php
      //if not have logo
        if( !has_custom_logo() ) : echo '<span class="text-logo">'.get_bloginfo( 'name' ).'</span>'; endif;
      //if have logo
      	if ( has_custom_logo() ) : echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" loading="lazy">'; endif;
          ?>
      </a>

    <!--Menu -->
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
		
    <!-- Menu bar -->
      <div class="collapse navbar-collapse" id="navbarPrimary">

		<?php if (has_nav_menu( 'primary' ) ) : 
		 wp_nav_menu( array(
		    'theme_location'  => 'primary',
		    'depth'           => 3, 
		    'container'       => 'div',
		    'container_class' => 'ms-auto me-4',
		    'menu_class'      => 'navbar-nav primary me-auto mb-2 mb-xl-0 fw-medium',
		    'fallback_cb'     => '__return_false',
		    'walker'          => new bootstrap_5_wp_nav_menu_walker(),
		  ) 
		);
		endif;?>
      </div>
		
	   <!--search icon-->
      <?php if(!is_search()): ?>
            <a href="javascript:search();" class="mx-2 mobile-hide" type="button" id="clickserach">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </a>
      <?php endif;?>
      </div>
      <?php if(!is_search()): get_search_form(); endif; ?>
  </nav>