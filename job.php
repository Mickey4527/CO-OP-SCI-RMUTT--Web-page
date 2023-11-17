<?php
/**
 * 
 * Template Name: Jobs home
 * Template Post Type: post, page, product
 * 
 * @package MIX
 * @since MIX 1.0
 * 
 */
get_header(); ?>

<!--header-->
<div class="content-page">
    <div class="header">
        <div class="header-content">
            <h1 class="fw-normal text-white"><?php the_title();?></h1>
        </div>
    </div>	
    <!--content-->
    <div class="bg-body-1 p-md-5">
    <div class="container-md border bg-white">
        <div class="row mt-5 mb-3">
            <div class="col-md-3 mb-5" >
                <h5 class="fw-normal">หมวดหมู่ตามสาขา</h5>
				<span class="badge rounded-pill text-bg-light"><a href="https://coopsci.rmutt.ac.th/?s=&cat=177&tag=166">ฟิสิกส์ประยุกต์</a></span>
            </div>
            <div class="col-md-9">
                <h2 class="fw-normal mb-4">รับสมัครงานล่าสุด</h2>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 15,
                        'cat' => 177
                    );

                $loop = new WP_Query($args);
                $i = 1;

                while ($loop->have_posts() && $i <= 4) :
                    $loop->the_post(); 
                    card_job();
                endwhile; ?>
            </div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>