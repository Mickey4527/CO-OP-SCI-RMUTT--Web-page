<div class="content-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--header-->
		<div class="header">
            <div class="header-content">
                <h1 class="fw-normal text-white"><?php the_title();?></h1>
            </div>
    	</div>		

    <!--content-->
    <section class="container mt-3 mt-md-5 mb-3">
        <article class="col-md-12">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
      <?php social_share(); ?>
    </section>

</div>