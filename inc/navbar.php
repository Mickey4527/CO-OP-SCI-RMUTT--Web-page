<?php
/**
 * MIX Theme, navbar file
 * File Description: This file contains the navbar.
 * 
 * @package MIX
 * @since MIX 2.0
 */

 function navbar($echo = true){
    // config values
    $front_page_config = array(
        'logo' => 'logo',
        'txt_color' => 'text-white',
        'bg_color' => 'bg-transparent',
        'logo_filter' => 'filter-white',
        'id_header' => 'header-navbar_front',
        'id_logo' => 'logo_header_front'
    );

    $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    
    $txt_color = (is_front_page()) ? $front_page_config['txt_color'] : '';
    $bg_color = (is_front_page()) ? $front_page_config['bg_color'] : 'bg-white';
    $logo_filter = (is_front_page()) ? $front_page_config['logo_filter'] : '';
    $id_header = (is_front_page()) ? $front_page_config['id_header'] : 'header-navbar';
    $id_logo = (is_front_page()) ? $front_page_config['id_logo'] : 'logo_header';
    $style = (is_front_page()) ? '' : 'style="border-bottom: 1px var(--color-dark-100) solid;"';
    
    $output = '<nav class="navbar navbar-expand-xl text-dark navbar-primary '.$bg_color.'" aria-label="navbarPrimary" id="'.$id_header.'" '.$style.'>';
    $output .= '<div class="container-fluid px-md-5"><a class="navbar-brand" href="'.home_url().'">';
    // Logo
    $output .= ( has_custom_logo() ) ? 
        '<img class="'.$logo_filter.'" src="'.esc_url( $logo[0] ).'" alt="'.get_bloginfo( 'name' ).'" loading="lazy" id="'.$id_logo.'"></a>' : 
        '<span class="text-logo '.$txt_color.'">'.get_bloginfo( 'name' ).'</span></a>';
    // Menu
    $output .= '<div class="d-flex flex-row-reverse">
                <button class="navbar-toggler '.$txt_color.'" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                
                </div>';
    // Menu bar
    $output .= '<div class="collapse navbar-collapse navbar-collapse-header" id="navbarPrimary">';
    if (has_nav_menu( 'primary' ) ) : 
        $output .= wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'           => 3, 
                        'container'       => 'div',
                        'container_class' => 'ms-auto me-4',
                        'menu_class'      => 'navbar-nav primary me-auto mb-2 mb-xl-0 fw-normal '.$txt_color,
                        'fallback_cb'     => '__return_false',
                        'walker'          => new bootstrap_5_wp_nav_menu_walker(),
                        'echo'            => false,
                    ) 
                );
    endif;
    $output .= '</div>';

    // Search icon
    if(!is_search()){
        $output .= '<a href="javascript:search();" class="mx-2 mobile-hide '.$txt_color.'" type="button" id="clickserach">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search '.$txt_color.'" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </a>';
    }
    $output .= '</div>';
    if(!is_search()){ $output .= get_search_form(); }
    $output .= '</nav>';

    if($echo){
        echo $output;
    }
    else{
        return $output;
    }
 }

 function header_page(){
    $content = '';
    $output = '<div class="position-fixed w-100 z-3 ">';
    $output .= '<nav class="bg-organ-600 text-white mobile-hide w-100" aria-label="navbarSecondary">';
    $output .= '<div class="container-fluid px-md-5">';

      // if enable header text
      if( has_custom_logo() && display_header_text()==true ) : 
        $output .= '<span class="text-logo text-white">'.get_bloginfo( 'name' ).'</span>'; endif;
		// if enable secondary menu
      if (has_nav_menu( 'secondary' ) ) : 
		$content =  wp_nav_menu( array(
		                'theme_location'  => 'secondary',
                        'depth'           => 3, 
                        'container'       => 'div',
                        'container_class' => 'ms-auto',
                        'menu_class'      => 'navbar-nav secondary me-auto',
                        'fallback_cb'     => '__return_false',
                        'walker'          => new bootstrap_5_wp_nav_menu_walker(),
                        'echo'            => false,
                    ) 
                );
        endif;
    $output .= $content;
    $output .= '</div>';
    $output .= '</nav>';
    $output .= navbar(false);
    $output .= '</div>';

    echo $output;
 }
?>