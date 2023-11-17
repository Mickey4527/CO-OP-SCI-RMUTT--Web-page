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

function carousel_feed($name = '') {
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

    if($loop->post_count == 0 && $name == 'news' && BANNER) {
        $link = (BANNER_LINK !== '') ? '<div class="link mt-5"><a class="px-5" href="'.BANNER_LINK.'">'.BANNER_LINK_NAME.' <i class="bi bi-arrow-right-short"></i></a></div>' : '';

        $output = '<div class="banner">
        <div class="banner-content p-5">
            <div class="text p-md-5">
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
        $output = '<div id="carousel-'.$name.'" class="carousel slide carousel-fade" data-bs-ride="carousel">'.
                    $indicators.
                    $content_inner.
                    $control.
                '</div>';
    }

    echo $output;
}

function spContent(){
    if(img_sp !== '' && img_sp !== null){
        $output = '<div class="row row-cols-1 row-cols-sm-2 align-items-center justify-content-center py-2">';
        $output = '<div class="col-10 col-sm-8 col-lg-6">';
        $output .= '<img width="100%" loading="lazy" alt ="
        '.header_sp.'" src="'.img_sp.'"></div>';
        $output .= '<div class="col-12 align-items-center">';
    }
    else{
        $output = '<div class="row align-items-center justify-content-center py-2">';
        $output .= '<div class="col-12 align-items-center text-center">';
    }
    $output .= '<h2 class="h4 fn-normal">'.header_sp.'</h2>';
    $output .= '<p>'.detail_sp.'</p>';
    $output .= '<div class="d-flex justify-content-center mt-4">';
    $output .= '<div class="link-box">';
    $output .= '<a href="'.link_sp.'">'.link_sp_name.' <i class="bi bi-box-arrow-in-up-right"></i></a>';
    $output .= '</div></div></div></div>'."\n";

    echo $output;
}

function link_feeds(){
    $banner = banner_link_page;
    $output = '';
    foreach($banner as $key => $value){
        $output .= '<div class="col-6 col-md-4 col-lg-3">';
        $output .= '<a href="'.$value['link'].'" target="'.$value['target'].'" class="d-flex justify-content-center align-items-center">';
        $output .= '<img src="'.$value['img'].'" alt="'.$value['title'].'" class="img-fluid">';
        $output .= '</a></div>';
    }
    echo $output;
}
function footer_contact_page(){
    $social = CONTACT_SOCIAL;
    $contact = CONTACT_INFO;
    $output = '';
    $content ='';

    foreach($contact as $key => $value){
        if($value['link'] !== ''){
            $content .= '<div class="col py-xl-0 py-2">';
            $content .= '<a href="'.$value['link'].'" class="fs-6 px-4 text-organ-500">';
            $content .= '<i class="'.$value['icon'].'"></i>';
            $content .= ' '.$value['desc'].'<span class="m-0 fs-5"> '.$value['title'].'</span>';
            $content .= '</a></div>';
        }
    }
    foreach($social as $key => $value){
        if($value['link'] !== ''){
            $content .= '<div class="col py-xl-0 py-2">';
            $content .= '<a href="'.$value['link'].'" class="fs-6 px-4 text-organ-500">';
            $content .= '<i class="'.$value['icon'].'"></i>';
            $content .= ' '.$value['title'];
            $content .= '</a></div>';
        }
    }

    $output = $content;
    echo $output;

}

function news_feed_box($cat_name,$limit,$link = true){
    $category_id = get_cat_ID($cat_name); // Get the ID of a given category
    $output = '';
    // id is false when the category cannot be found
    if(!get_cat_ID($cat_name)){
        $output .= '<div class="col-12 d-flex justify-content-center align-items-center">
                <h2 class="h5 my-5 text-center text-dark-600">ไม่พบข้อมูล</h2>
            </div>';
        echo $output;
        return;
    }

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $limit,
        'cat' => $category_id
    );

    $loop = new WP_Query($args);
    if($loop->post_count == 0){
        $output .= '<div class="col-12 d-flex justify-content-center align-items-center">
                <h2 class="h5 my-5 text-center text-dark-600">ไม่พบข้อมูล</h2>
            </div>';
    }
    else{
        for($i = 1; $loop->have_posts() && $i <= 4; $i++) {
            $loop->the_post(); 
            $output .= '<div class="col-12 col-md-6 col-lg-3 py-3">';
            $output .= '<div class="feed-card border border-1" id="post-'.get_the_ID().'">';
            $output .= '<a href="'.get_the_permalink().'">';
            $output .= '<div class="thumbnail">';
            $output .= (has_post_thumbnail()) ? get_the_post_thumbnail() : '<img loading="lazy" alt ="logo slide show" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1920-4.png">';
            $output .= '</div></a>';
            $output .= '<div class="item-content">';
            $output .= '<span class="date small text-muted">'.get_the_time('j F Y').'</span>';
            $output .= '<div class="title"><h5><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5></div>';
            $output .= '</div>';
            $output .= '<footer class="entry-footer d-flex flex-column">';
            $output .= '<a href="'.get_the_permalink().'">อ่านต่อ<i class="bi bi-arrow-right"></i></a>';
            if(current_user_can('edit_post', get_the_ID())){
                $output .= '<a href="'.get_edit_post_link().'">แก้ไข<i class="bi bi-pencil-square"></i></a>';
            }
            $output .= '</footer></div></div>';
        }
        if($link){
            $output .= '<div class="col-12 d-flex justify-content-center align-items-center mt-4 link-box">';
            $output .= '<a href="'.get_category_link($category_id).'">ดูทั้งหมด <i class="bi bi-arrow-right"></i></a>';
            $output .= '</div>';
        }
    }

    wp_reset_postdata();
    echo $output;
}

function social_share(){
    echo '
        <article class="col-md-12 py-3 d-flex justify-content-center align-items-center">
            <span class="fw-bold px-3">Share</span>
            <a href="https://lineit.line.me/share/ui?url='.get_the_permalink().'" target="_blank" rel="noopener noreferrer" class="icon-link"><i class="bi bi-line fs-3"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'" target="_blank" rel="noopener noreferrer" class="icon-link"><i class="bi bi-facebook fs-3"></i></a>
            <a href="https://twitter.com/intent/tweet?url='.get_the_permalink().'&text='.get_the_title().'" target="_blank" rel="noopener noreferrer" class="icon-link"><i class="bi-twitter-x fs-3"></i></a>
        </article>
    ';
}

function archive_card(){
    $output = '';
    $output .= '<div class="col-12 col-md-6 col-lg-3 py-3">';
    $output .= '<div class="feed-card border border-1">';
    $output .= '<a href="'.get_the_permalink().'">';
    $output .= '<div class="thumbnail">';
    $output .= (has_post_thumbnail()) ? get_the_post_thumbnail() : '<img loading="lazy" alt ="logo slide show" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1920-4.png">';
    $output .= '</div></a>';
    $output .= '<div class="item-content">';
    $output .= '<span class="date small text-muted">'.get_the_time('j F Y').'</span>';
    $output .= '<div class="title"><h5><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5></div>';
    $output .= '</div>';
    $output .= '<footer class="entry-footer d-flex flex-column">';
    $output .= '<a href="'.get_the_permalink().'">อ่านต่อ<i class="bi bi-arrow-right"></i></a>';
    if(current_user_can('edit_post', get_the_ID())){
        $output .= '<a href="'.get_edit_post_link().'">แก้ไข<i class="bi bi-pencil-square"></i></a>';
    }
    $output .= '</footer></div></div>';

    echo $output;
}

function card_job(){
    $output = '';
    $output .= 'a href="'.get_the_permalink().'">';
    $output .= '<div class="card mb-3" id="post-'.get_the_ID().'" '.get_post_class().'">';
    $output .= '<div class="row g-0">';
    $output .= '<div class="col-2 col-img rounded-start">';
    $output .= (has_post_thumbnail()) ? get_the_post_thumbnail() : '<img loading="lazy" alt ="logo slide show" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1920-4.png">';
    $output .= '</div>';
    $output .= '<div class="col-10">';
    $output .= '<div class="card-body">';
    $output .= '<h4 class="card-title fw-bold text-secondary-emphasis">'.get_the_category()[0]->cat_name.'</h5>';
    $output .= '<h5 class="fw-normal mb-3">'.get_the_title().'</h5>';
    $output .= '<p class="card-text">';
    foreach(get_the_tags() as $tag){
        $output .= '<small class="text-body-secondary me-3">#'.$tag->name.'</small>';
    }
    $output .= '</p></div></div></div></div></a>';


    echo $output;

}
?>