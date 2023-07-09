<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--header-->
    <div class="<?php if ( has_post_thumbnail() ) : echo 'bg-glary-1 text-white'; else: echo 'bg-coop-2 text-white';endif;?>">
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
    <div class="bg-white-1">
		<div class="container py-5">
			<section class="row">
				<article class="col-md-12 d-flex justify-content-center">
					<h1 class="animate__animated animate__fadeInUp"><?php the_title(); ?></h1>
				</article>
			</section>
    	</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TOB_9439.jpg" alt="img-header" loading="lazy">
        <div class="card-box_overlay"></div>
	</div>

    <!--content-->
    <div class="container">
        <section class="row">
            <article class="col py-4">
                <article class="article-content">
                    <?php the_content(); ?>
                </article>
            </article>
        </section>
    </div>
</div>