<?php
//  _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
// |                                           |
// |     config post for show in carousel      |
// |     and news feed                         |
// |_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _|
//

function carousel_feed($id, $cat_set) {
    //config values
    $loop = new WP_Query($cat_set);
    $post_per_page = $loop->post_count;
    

    //Indicators loop
    $indicators = '<button type="button" data-bs-target="#carousel-'.$id.'" data-bs-slide-to="0" class="active"></button>';
    for($i = 1; $loop->have_posts() && $i <= $post_per_page-1; $i++) { 
        $indicators .= '<button type="button" data-bs-target="#carousel-'.$id.'" data-bs-slide-to="'.$i.'"></button>'."\n";
    }

    //Content loop
    $content_inner = '';
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
    $control = '<button class="carousel-control-prev bg-onlypre-left" type="button" data-bs-target="#carousel-'.$id.'" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next bg-onlynext-right" type="button" data-bs-target="#carousel-'.$id.'" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>';

    //output
    $output = '<div id="carousel-'.$id.'" class="carousel slide carousel-fade" data-bs-ride="carousel">'.
                $indicators.
                $content_inner.
                $control.
            '</div>';

    return $output;
}
?>