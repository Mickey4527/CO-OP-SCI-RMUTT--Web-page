<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="article-header_img">
            <figure>
                <?php the_post_thumbnail(); ?>
            </figure>
        </div>
    <?php endif; ?> 
    <div class="p-5">
        <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="article-header_date"><?php the_date(); ?></div>  
                        <h1><?php the_title(); ?></h1>
                        <div class="article-header_writter">Published by <a href=""><?php the_author(); ?></a></div> 
                    </div>
                </div>
        </div>
    </div>

<article class="bg-white rounded-top">
    <div class="container">
        <div class="row">
                <div class="col p-5">
                    <article class="article-content">
                        <?php the_content(); ?>
                    </article>
                </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if ( has_category() ) :?>
                    <div class="article-footer_category">
                        <div class="article-footer_handing"><h5>หมวดหมู่</h5></div>
                        <div class="article-footer_item"><?php the_category(); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
</article>

</section>
