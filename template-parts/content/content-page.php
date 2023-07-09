<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--header-->
		<div class="header-page">
			<div class="item-contents">
					<h1 class="animate__animated animate__fadeInUp"><?php the_title();?></h1>
			</div>
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/TOB_9439.jpg" alt="img-header" loading="lazy">
			<div class="card-box_overlay"></div>
    	</div>		

    <!--content-->
    <div class="container">
        <section class="row">
            <article class="col-md-12 py-5">
                <article class="article-content">
                    <?php the_content(); ?>
                </article>
            </article>
        </section>
    </div>
</div>