<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bg-body-2 p-md-5">
		<div class="container-md mobile-hide"><small class="text-body-secondary me-3"><a href="https://coopsci.rmutt.ac.th/?page_id=4348">&lt;&lt; กลับไปหน้าหางาน</a></small></div>
        <div class="container-md bg-white">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="row">
                        <div class="col-2 col-img">
                            <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); else: echo '<img loading="lazy" alt ="logo slide show" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1920-4.png">'; endif;  ?>
                        </div>
                        <div class="col-10 d-flex flex-column align-items-start justify-content-center">
                            <h3 class="fw-medium"><?php the_title(); ?></h3>
                            <h4 class="fw-normal text-secondary"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h4>
							<small class="text-secondary">วันที่ลง <?php the_date('d F Y'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 article-content px-md-5">
                    <?php the_content(); ?>
                </div>
                <?php social_share(); ?>
            </div>
        </div>
    </div>
</section>