<!--Carousel-->
<div class="container-fluid p-0">
    <?php 
    // config the carousel
    $cat_set = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        //'cat' => '' // <= Default is all categories. Delete comment to specify a category
    );

    // you can edit the carousel_feed function in inc/news_feed.php
    echo carousel_feed('homefeed', $cat_set);
    ?>
</div>

<!--Menu-->
<div class="container-xxl mt-5">
    <div class="row">	
        <div class="side-menu ps-5">
            <?php
            //config values
                $list_menu = array(
                    'calendar_coop' => array(
                        'title' => 'ปฏิทินฝึกประสบการณ์วิชาชีพ',
                        'link' => 'https://coopsci.rmutt.ac.th/?page_id=2248',
                        'icon' => 'bi bi-calendar4-week'
                    ),
                    'download_coop' => array(
                        'title' => 'ดาวโหลดน์แบบฟอร์ม',
                        'link' => 'https://coopsci.rmutt.ac.th/?page_id=3124',
                        'icon' => 'bi bi-download'
                    ),
                    'manual_coop' => array(
                        'title' => 'คู่มือนักศึกษา',
                        'link' => 'https://coopsci.rmutt.ac.th/?page_id=3126',
                        'icon' => 'bi bi-book'
                     ),
                    'data_coop' => array(
                        'title' => 'ข้อมูลสถานประกอบการ',
                        'link' => 'https://lookerstudio.google.com/s/uvbljH9fO_U',
                        'icon' => 'bi bi-pie-chart-fill'
                    ),
                    // template for add new menu
                    // 'menu_name' => array(
                    //     'title' => 'menu title',
                    //     'link' => 'menu link',
                    //     'icon' => 'menu icon'
                    // ),
            );
                // you can edit the menu_feed function in inc/menu_feed.php
               echo menu_feed($list_menu);
            ?>
            </div>
        </div>
	</div>


<div class="container-xxl mb-5">
	<div class="row row-cols-1 row-cols-sm-2 align-items-center justify-content-center py-2">
		<div class="col-10 col-sm-8 col-lg-6">
			 <img width="100%" loading="lazy" alt ="contemporary-office" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/10606197_9814-scaled.jpg">
		</div>
		<div class="col ">
			 <h2 class="display-6 fw-medium animate__animated animate__fadeInUp  text-coop-1">CWIE (Cooperative and Work Integrated Education)</h2>
			<p class="fs-5 animate__animated animate__fadeInUp">คือ หลักสูตรการเรียนการสอนในลักษณะร่วมผลิตระหว่างสถาบันอุดมศึกษาและสถานประกอบการ (ภาครัฐ เอกชน ชุมชน) เพื่อให้บัณฑิตพร้อมสู่โลกแห่งการทำงานจริงได้ทันที มีสมรรถนะตรงกับความต้องการของตลาดงาน สามารถพัฒนาอาชีพในปัจจุบันและเตรียมพร้อมรองรับตำแหน่งงานในอนาคต
			</p>
			<div class="d-flex justify-content-center mt-4">
				<div class="link-box">
				<a href="https://coopsci.rmutt.ac.th/?page_id=2533">อ่านเพิ่มเติม</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php 
    $category_id = get_cat_ID( 'ข่าวประชาสัมพันธ์' ); // Get the ID of a given category
    $category_link = get_category_link( $category_id );// Get the URL of this category
?>

<!--News-->
<div class="bg-white-1">
<div class="container-lg py-5">
    <div class="row">
        <div class="col-md-12 mb-3 d-flex align-items-center justify-content-between">
                <h2>ข่าวสารและกิจกรรม</h2>
				<?php if( have_posts(  )) : ?><div class="link-box "><a href="<?php echo esc_url( $category_link ); ?>">ดูทั้งหมด</a></div><?php endif;?>
        </div>

      <div class="col-md-12 mt-3 mb-5">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'cat' => $category_id
                );

                $loop = new WP_Query($args);
                $i = 1;
                $name = "carousel-news";

                while ($loop->have_posts() && $i <= 7) :
                    $loop->the_post();

                    if ($i == 1) : ?>
                        <div class="col-md">
                        <div id="<?php echo $name;?>" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#<?php echo $name;?>" data-bs-slide-to="0" class="active"></button>
                                <?php
                                for ($j = 1; $j < 3; $j++) {
                                    echo '<button type="button" data-bs-target="#'.$name.'" data-bs-slide-to="'.$j.'"></button>';  
                                }?>
                            </div>
                            <div class="carousel-inner">
                        <?php endif;

                        if ($i < 4) : ?>
                                <div class="carousel-item full <?php if ($i == 1) : echo "active"; endif; ?>" >
                                    <a href="<?php the_permalink();?>">
                                        <div class="carousel-thumbnail">
                                            <?php the_post_thumbnail();?>
                                        </div>
                                    </a>
                                    <div class="bg-side"><?php the_post_thumbnail();?></div>
                                </div>
                        <?php endif;
                        
                        if ($i == 4) : ?>
                        </div>
                            <button class="carousel-control-prev bg-onlypre-left" type="button" data-bs-target="#<?php echo $name;?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next bg-onlynext-right" type="button" data-bs-target="#<?php echo $name;?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                <div class="col-md-4 c-hide  px-0">
                <?php endif;
                if ($i > 5 && $i <= 7) : ?>
                      <?php get_template_part( 'template-parts/content/content', 'excerptfull' );?>
                <?php endif; if ($i == 7) :?>
                </div>
                <?php endif;
                    $i++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
		</div>
</div>
</div>

<!--video-->
<?php get_template_part( 'template-parts/content/content-widget' ); ?>


<div class="container my-1">
    <div class="row">
        <div class="col-md-12 mt-5 mb-3 d-flex align-items-center justify-content-between">
                <h2>ผลงานรางวัล</h2>
				<?php if( have_posts(  )) : ?><div class="link-box"><a href="https://coopsci.rmutt.ac.th/?page_id=2430">ดูทั้งหมด</a></div><?php endif;?>
        </div>


        <div class="col-md-12 mt-3">
			<div class="row">
				<?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'cat' => 35
                );

            $loop = new WP_Query($args);
            $i = 1;

               while ($loop->have_posts() && $i <= 4) :
                $loop->the_post(); ?>
                <div class="col-md-3">
                      <?php get_template_part( 'template-parts/content/content', 'excerpt' );?>
                </div>
            <?php endwhile; ?>
				
			</div>
        </div>
    </div>
</div>
<!--end News-->

<!--link-->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 mb-2">
            <h4>ลิงก์ที่เกี่ยวข้อง</h4> 
        </div>
        
        <div class ="col-md-12 mt-3">
			<a href="https://cwie.mhesi.go.th/">
                <div class="card-box type-3">
					<div class="logo">
						<img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1-3.png" alt="Logo" loading="lazy" >
					</div>
                </div>
            </a>

			<a href="https://www.oreg.rmutt.ac.th/">
                <div class="card-box type-3">
					<div class="logo">
                        <img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/2-2.png" alt="Logo" loading="lazy" width="75%">
					</div>
                </div>
            </a>

			<a href="https://www.mhesi.go.th/">
                <div class="card-box type-3">
					<div class="logo">
						<img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/3-1.png" alt="Logo" loading="lazy">
					</div>
                </div>
            </a>

			<a href="https://tace.sut.ac.th/tace/">
                <div class="card-box type-3">
					<div class="logo">
						<img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/4.png" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
					</div>
                </div>
            </a>

			<a href="https://www.job.rmutt.ac.th/">
                <div class="card-box type-3">
					<div class="logo">
						<img src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1S3M1425.png" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
					</div>
                </div>
            </a>
        </div>
    </div>
</div>