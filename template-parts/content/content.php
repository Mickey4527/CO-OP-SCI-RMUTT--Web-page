<!--Carousel-->
<div class="container-fulid">
        <article class="mt-0">
            <div id="carousel-homefeed" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="0" class="active"></button>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
					'cat' => 220
                );
                $loop = new WP_Query($args);
                $i = 1; // set a counter for the loop

                while ($loop->have_posts() && $i <= 5) { ?>
                        <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="<?php echo $i;?>"></button>
                    <?php
                    $i++; // increment the counter
                }?>
            </div>
				
          <!--content-->
            <div class="carousel-inner">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
				'cat' => '220,223'
            );
            $loop = new WP_Query($args);
            $i = 1; // set a counter for the loop

            while ($loop->have_posts() && $i <= 6) {
                $loop->the_post(); ?>
                <div class="carousel-item <?php if($i == 1) : echo "active"; endif;?>">
						<a href="<?php the_permalink();?>">
                        	<div class="carousel-thumbnail">
                            	<?php the_post_thumbnail();?>
                       		 </div>                        
                    	</a> 
					<div class="bg-side"><?php the_post_thumbnail();?></div>
                </div>
                <?php
                $i++; // increment the counter
            }
            wp_reset_postdata(); // reset the post data ?>
            </div>
				
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev bg-onlypre-left" type="button" data-bs-target="#carousel-homefeed" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-onlynext-right" type="button" data-bs-target="#carousel-homefeed" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </article>
</div>

<div class="bg-white">
	<div class="container">
	<div class="row row-cols-1 row-cols-sm-2 align-items-center justify-content-center py-5">
		<div class="col-10 col-sm-8 col-lg-6">
			 <img width="100%" loading="lazy" alt ="contemporary-office" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/10606197_9814-scaled.jpg">
		</div>
		<div class="col ">
			 <h2 class="display-6 fw-medium animate__animated animate__fadeInUp  text-coop-1">CWIE (Cooperative and Work Integrated Education)</h2>
			<p class="fs-5 animate__animated animate__fadeInUp">คือ หลักสูตรการเรียนการสอนในลักษณะร่วมผลิตระหว่างสถาบันอุดมศึกษาและสถานประกอบการ (ภาครัฐ เอกชน ชุมชน) เพื่อให้บัณฑิตพร้อมสู่โลกแห่งการทำงานจริงได้ทันที มีสมรรถนะตรงกับความต้องการของตลาดงาน สามารถพัฒนาอาชีพในปัจจุบันและเตรียมพร้อมรองรับตำแหน่งงานในอนาคต
			</p>
			<div class="link-box mt-5"><a href="https://coopsci.rmutt.ac.th/?page_id=2533">อ่านเพิ่มเติม</a></div>
		</div>
	</div>
</div>
</div>

<?php
	  // Get the ID of a given category
    $category_id = get_cat_ID( 'ข่าวประชาสัมพันธ์' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
<!--News-->
<div class="container">
        <div class="row">
            <section class="main a">

            <article>
                <div class="border-title">
                    <h2 class="section-title a">ข่าวประชาสัมพันธ์</h2>
                </div>           
            </article>
            
            <article class="mt-3">

<?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
				'cat' => $category_id
            );
            $loop = new WP_Query($args);
            $i = 1; // set a counter for the loop

               while ($loop->have_posts() && $i <= 4) :
                $loop->the_post(); ?>
                <div class="col">
                      <?php get_template_part( 'template-parts/content/content', 'excerpt' );?>
                </div>
<?php endwhile; ?>
            </article>
			
            <?php if( have_posts(  )) : ?><div class="link-box mt-5"><a href="<?php echo esc_url( $category_link ); ?>">ดูเพิ่มเติม</a></div><?php endif;?>
            </section>
        </div>
    </div>

<div class="py-5 bg-white-1 text-organ">
	<!--Menu-->

<div class="container">
    <div class="row">	
        <div class="side-menu">
            <div class="col">
              <a href="https://coopsci.rmutt.ac.th/?page_id=2248">  
                <div class="card-box ms-2 is-left text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>
                        <div class="title"><h3>ปฎิทินสหกิจศึกษา</h3></div>
                    </div>
                </div>
			</a>
            </div>
            <div class="col-sm">
                <a href="https://coopsci.rmutt.ac.th/?page_id=3124">
                <div class="card-box ms-2 is-left text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                        <div class="title"><h3>ดาวโหลดแบบฟอร์มสหกิจศึกษา</h3></div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://coopsci.rmutt.ac.th/">
                <div class="card-box ms-2 is-left text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
  <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
</svg>
                        <div class="title"><h3>ขั้นตอนสหกิจศึกษา</h3></div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="#">
                    <div class="card-box ms-2 is-left text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
                        <div class="title"><h3>ภาพกิจกรรม</h3></div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
	</div>

<div class="container pt-1">
	<div class="row">
	
				<a class="card-box type-4 text-white txt-shadow" href="#">
                    <img class="mix-card_img" loading="lazy" alt ="business-women-signature-document" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/business-women-signature-document-1.jpg">
                        <div class="item-contents display-5">
                            <h1>ขั้นตอนการดำเนินงาน</h1>                  
                        </div>
                        <div class="card-box_overlay"></div>
                </a>
	

				<a class="card-box type-4 text-white txt-shadow" href="#">
                    <img class="mix-card_img" loading="lazy" alt ="top view career guidance items judges" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/top-view-career-guidance-items-judges-1-1.jpg">
                        <div class="item-contents display-5">
                            <h1>กฏหมาย</h1>                  
                        </div>
                        <div class="card-box_overlay"></div>
                </a>
				<a class="card-box type-4 text-white txt-shadow" href="#">
                    <img class="mix-card_img" loading="lazy" alt ="contemporary-office" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/contemporary-office.jpg">
                        <div class="item-contents display-5">
                            <h1>5 ส</h1>                  
                        </div>
                        <div class="card-box_overlay"></div>
                </a>
				<a class="card-box type-4 text-white txt-shadow" href="#">
                    <img class="mix-card_img" loading="lazy" alt ="business-women-signature-document" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/business-women-signature-document-1.jpg">
                        <div class="item-contents display-5">
                            <h1>การสมัครงาน</h1>                  
                        </div>
                        <div class="card-box_overlay"></div>
                </a>
		</div>
	</div>
</div>

<div class="container">
        <div class="row">
            <section class="main a">
            <article>
                  <h4>ลิงก์ที่เกี่ยวข้อง</h4>       
            </article>
            <article class="mt-3">
					<a href="#">
                        <div class="card-box ms-3">
                                <img src="#" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
                        </div>
                    </a>
					<a href="#">
                        <div class="card-box ms-3">
                                <img src="#" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
                        </div>
                    </a>
					<a href="#">
                        <div class="card-box ms-3">
                                <img src="#" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
                        </div>
                    </a>
					<a href="#">
                        <div class="card-box ms-3">
                                <img src="#" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
                        </div>
                    </a>
				<a href="#">
                        <div class="card-box ms-3">
                                <img src="#" alt="Logo" loading="lazy" style="width: 100%; height: auto; ">
                        </div>
                    </a>
			</article>
            </section>
        </div>
    </div>