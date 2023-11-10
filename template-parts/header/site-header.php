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
<?php navbar();?>