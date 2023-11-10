<?php
/** 
 * MIX Theme, copyright 2023
 * File Description: File for displaying the news feed.
 * 
 * @package MIX
 * @since MIX 2.0
 */

 function menu_feed() {
    $list_menu = MENU;
    $output = '';
    foreach ($list_menu as $key => $value) {
        $output .= '<div class="menu-card col-xl-2 col-6 py-3 px-4">
                        <a href="'.$value['link'].'">
                            <div class="h-100 d-flex flex-column justify-content-between align-items-center">
                                <div class="icon w-100 d-flex justify-content-end"><i class="'.$value['icon'].'"></i></div>
                                <div class="title w-100 d-flex justify-content-start"><h4>'.$value['title'].' <i class="bi bi-arrow-right-short"></i></h4></div>
                            </div>
                        </a>
                    </div>
                    ';
    }
    echo $output;
}

function carousel_feed($name = 'carousel') {
    //config values
    $cat = CARO_CAT;
    $set = CARO_LIMIT;
    $date = CARO_DATE_AFTER;

    $loop = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => $set,
            'cat' => $cat,
            'date_query' => array(
                'after' => $date
            )
        )
    );

    $post_per_page = $loop->post_count;

    //Content loop
    $content_inner = '';

    if($loop->post_count == 0 && $name == 'carousel-news' && BANNER) {
        $link = (BANNER_LINK !== '') ? '<div class="link mt-5"><a class="px-5" href="'.BANNER_LINK.'">'.BANNER_LINK_NAME.' <i class="bi bi-arrow-right-short"></i></a></div>' : '';

        $output = '<div class="banner">
        <div class="banner-content p-5">
            <div class="text p-5">
                <h1>'.BANNER_Header.'</h1>
                <p class="fs-5">'.BANNER_Detail.'</p>
                '.$link.'
            </div>
            <div class="item">
                <img src="'.BANNER_IMG.'" alt="banner" class="img-fluid" loading="lazy">
            </div>
        </div>
        </div>
        ';
    }
    else{
        //Indicators loop
        $indicators = '<button type="button" data-bs-target="#carousel-'.$name.'" data-bs-slide-to="0" class="active"></button>';
        for($i = 1; $loop->have_posts() && $i <= $post_per_page-1; $i++) { 
            $indicators .= '<button type="button" data-bs-target="#carousel-'.$name.'" data-bs-slide-to="'.$i.'"></button>'."\n";
        }
        for($i = 1; $loop->have_posts() && $i <= 6 ; $i++) {
            $loop->the_post(); 
            $content_inner .= '<div class="carousel-item '.($i == 1 ? "active" : "").'">
                            <a href="'.get_the_permalink().'">
                                <div class="carousel-thumbnail">'.get_the_post_thumbnail().'</div>
                            </a>
                            <div class="bg-side">'.get_the_post_thumbnail().'</div>
                        </div>';
            wp_reset_postdata(); 
        }

         //show carousel
        $indicators = '<div class="carousel-indicators">'. $indicators.'</div>';
        $content_inner = '<div class="carousel-inner">'.$content_inner.'</div>';

        //left and right control
        $control = '<button class="carousel-control-prev bg-onlypre-left" type="button" data-bs-target="#carousel-'.$name.'" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next bg-onlynext-right" type="button" data-bs-target="#carousel-'.$name.'" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>';

        //output
        $output = '<div name="carousel-'.$name.'" class="carousel slide carousel-fade" data-bs-ride="carousel">'.
                    $indicators.
                    $content_inner.
                    $control.
                '</div>';
    }

    echo $output;
}

function spContent(){
    $output = '<div class="col-10 col-sm-8 col-lg-6">';
    $output .= '<img width="100%" loading="lazy" alt ="
    '.header_sp.'" src="'.img_sp.'">';
    $output .= '</div><div class="col">';
    $output .= '<h2 class="h-4 fn-normal">'.header_sp.'</h2>';
    $output .= '<p class="text-dark-600 fs-5">'.detail_sp.'</p>';
    $output .= '<div class="d-flex justify-content-center mt-4">';
    $output .= '<div class="link-box">';
    $output .= '<a href="'.link_sp.'">'.link_sp_name.' <i class="bi bi-box-arrow-in-up-right"></i></a>';
    $output .= '</div></div></div>';

    echo $output;
}
?>
