<?php
/**
 * MIX Theme
 * File Description: This file contains the single post content.
 * 
 * 
 * @package MIX
 * @since MIX 1.0
 */
?>

<section class="container content-singel-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <article class="col-md-12 d-flex justify-content-center align-items-center">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="header-img">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?> 
        </article>

        <article class="col-md-12 my-4">
            <h3 class="fw-medium text-dark-950 m-0"><?php the_title();?></h3>
            <span class="text-muted"><?php the_date(); ?>&nbsp;|&nbsp;<?php the_author(); ?></span>
        </article>

        <article class="col-md-12">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>

        <footer class="col-md-12 mt-3">
            <?php if ( has_category() ) :?>
                <div class="category d-flex align-items-center mb-4">
                    <h6 class="text-muted fw-bold m-0 pe-md-4 pe-2">หมวดหมู่</h6>
                    <div class="item"><?php the_category(); ?></div>
                </div>
                <?php endif; 
                      social_share(); ?>
        </footer>

        <div class="col-md-12 mb-3 d-flex align-items-center justify-content-between">
            <h4 class="fw-normal text-organ-500 text-center">ข่าวล่าสุด</h4>
        </div>
        <div class="col-md-12 mt-3">
            <div class="row d-flex justify-content-center">
                <?php
                    $cat_name = get_the_category()[0]->cat_name;
                    news_feed_box($cat_name,4);
                ?>
            </div>	    
        </div>
    </div>
</section>