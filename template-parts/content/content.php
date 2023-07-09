<!--Carousel-->
<div class="container-fluid p-0">
    <div id="carousel-homefeed" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="0" class="active"></button>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'cat' => 220,223
            );
            $loop = new WP_Query($args);
            $i = 1;

            while ($loop->have_posts() && $i <= 5) { ?>
                <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="<?php echo $i;?>"></button>
                <?php
                $i++;
            }?>
        </div>
        <!--end Indicators-->
        <!--content-->
        <div class="carousel-inner">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'cat' => 220,223
             );

            $loop = new WP_Query($args);
            $i = 1;

            while ($loop->have_posts() && $i <= 6) {
                $loop->the_post(); 
        ?>
                <div class="carousel-item <?php if($i == 1) : echo "active"; endif;?>">
                    <a href="<?php the_permalink();?>">
                        <div class="carousel-thumbnail">
                            <?php the_post_thumbnail();?>
                        </div>
                    </a>
                    <div class="bg-side"><?php the_post_thumbnail();?></div>
                </div>
        <?php
                $i++;
            }
             wp_reset_postdata(); 
        ?>
        </div>
        <!--end content-->

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev bg-onlypre-left" type="button" data-bs-target="#carousel-homefeed" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next bg-onlynext-right" type="button" data-bs-target="#carousel-homefeed" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <!--end Left and right controls/icons -->
    </div>
</div>

<!--Menu-->
<div class="container mt-5">
    <div class="row">	
        <div class="side-menu ps-5">
            <div class="col">
              <a href="https://coopsci.rmutt.ac.th/?page_id=2248">  
                <div class="card-box ms-2 bg-white align-items-center justify-content-center rounded-3 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                <div class="title w-100 d-flex justify-content-center text-center"><h4>ปฎิทินฝึกประสบการณ์วิชาชีพ</h4></div>
                </div>
			</a>
            </div>
            <div class="col-sm">
                <a href="https://coopsci.rmutt.ac.th/?page_id=3124">
                <div class="card-box ms-2 bg-white align-items-center justify-content-center rounded-3 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                        <div class="title w-100 d-flex  justify-content-center text-center"><h4>ดาวโหลดน์แบบฟอร์ม</h4></div>      
                </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://www.oreg.rmutt.ac.th/?page_id=9968">
                <div class="card-box ms-2 bg-white align-items-center justify-content-center rounded-3 shadow">
               <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
</svg>
                        <div class="title w-100 d-flex  justify-content-center text-center"><h4>E-Portfolio</h4></div>
                </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://lookerstudio.google.com/s/uvbljH9fO_U">
                    <div class="card-box ms-2 bg-white align-items-center justify-content-center rounded-3 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
  <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
</svg>
                        <div class="title w-100 d-flex  justify-content-center text-center"><h4>ข้อมูลสถานประกอบการ</h4></div>
                    </div>
                </a>
            </div>
        </div>
        </div>
	</div>


<div class="container mb-5">
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
<div class="container py-5">
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

<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 mt-5 mb-3 d-flex align-items-center justify-content-between">
                <h2>ผลงานรางวัล</h2>
				<?php if( have_posts(  )) : ?><div class="link-box"><a href="https://coopsci.rmutt.ac.th/?page_id=2430">ดูทั้งหมด</a></div><?php endif;?>
        </div>


        <div class="col-md-12 mt-3">
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
                <div class="col">
                      <?php get_template_part( 'template-parts/content/content', 'excerpt' );?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!--end News-->


<div class="bg-white-1 py-5">
<div class="container my-1">
	<div class="row">
		<div class="col-md-12 mb-3 d-flex align-items-center justify-content-between">
                <h2>สาระความรู้</h2>
        </div>
		
		<div class="col-md-3">
			<a class="card-box type-4 text-white txt-shadow" href="https://coopsci.rmutt.ac.th/?page_id=3349">
            <img class="mix-card_img" loading="lazy" alt ="business-women-signature-document" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/business-women-signature-document-1.jpg">
             <div class="item-contents display-5">
                <h2>การดำเนินงาน</h2>                  
            </div>
            <div class="card-box_overlay bg-coop-9"></div>
        </a>
		</div>
		<div class="col-md-3">
			<a class="card-box type-4 text-white txt-shadow" href="https://coopsci.rmutt.ac.th/?page_id=3351">
            <img class="mix-card_img" loading="lazy" alt ="business-women-signature-document" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/business-women-signature-document-1.jpg">
                <div class="item-contents display-5">
                    <h2>การสมัครงาน</h2>                  
                </div>
             <div class="card-box_overlay bg-coop-9"></div>
        </a>
		</div>
		<div class="col-md-3">
			<a class="card-box type-4 text-white txt-shadow" href="https://coopsci.rmutt.ac.th/?page_id=3353">
            <img class="mix-card_img" loading="lazy" alt ="top view career guidance items judges" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/top-view-career-guidance-items-judges-1-1.jpg">
                <div class="item-contents display-5">
                    <h2>กฏหมาย</h2>                  
                </div>
            <div class="card-box_overlay bg-coop-9"></div>
        </a>
		</div>
		<div class="col-md-3">
				<a class="card-box type-4 text-white txt-shadow" href="https://coopsci.rmutt.ac.th/?page_id=3355">
            <img class="mix-card_img" loading="lazy" alt ="contemporary-office" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/contemporary-office.jpg">
                <div class="item-contents display-5">
                    <h2>5 ส</h2>                  
                </div>
            <div class="card-box_overlay bg-coop-9"></div>
        </a>
		</div>
	</div>
</div>
</div>

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