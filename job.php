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
                <div class="d-flex justify-content-between mb-4">
                    <h2 class="fw-normal m-0">รับสมัครงานล่าสุด</h2>
                    <?php
                        if( is_user_logged_in() ) {
                            echo '<a href="https://coopsci.rmutt.ac.th/?page_id=4348" class="btn-link d-flex align-items-center"><i class="bi bi-question-circle"></i>&nbsp;เพิ่มงาน</a>';
                        }
                    ?>
                </div>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 15,
                        'cat' => 177
                    );

                $loop = new WP_Query($args);
                $i = 1;
                if ($loop->have_posts()) {
                    while ($loop->have_posts() && $i <= 4) :
                        $loop->the_post(); 
                        card_job();
                    endwhile; 
                }else{
                    echo '<div class="col-md-12 text-center py-5 text-muted"><h5>ไม่มีข้อมูล</h5></div>';
                }
                wp_reset_postdata();
                ?>
            </div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>

