<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="<?php if ( has_post_thumbnail() ) : echo 'bg-glary-1 text-white'; else: echo 'bg-img-1 text-white';endif;?>">
    <div class="p-5">
        <div class="container">
                <div class="row">
                    <div class="col mt-3 mb-3">
                        <h1 class="txt-shadow text-center animate__animated animate__fadeInUp"><?php the_title(); ?></h1>
                    </div>
                </div>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="bg-side">
                <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?> 
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

</article>

</section>
