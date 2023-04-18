<!--Carousel-->
<div class="container">
        <article>
            <div id="carousel-homefeed" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="0" class="active"></button>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6
                );
                $loop = new WP_Query($args);
                $i = 1; // set a counter for the loop

                while ($loop->have_posts() && $i <= 6) { ?>
                        <button type="button" data-bs-target="#carousel-homefeed" data-bs-slide-to="<?php echo $i;?>"></button>
                    <?php
                    $i++; // increment the counter
                }?>
            </div>
            <div class="carousel-inner">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $loop = new WP_Query($args);
            $i = 1; // set a counter for the loop

            while ($loop->have_posts() && $i <= 6) {
                $loop->the_post(); ?>
                <div class="side-show carousel-item <?php if($i == 1) : echo "active"; endif;?>">
                                <figure class="container-img">
                                    <?php the_post_thumbnail();?>
                                </figure>
                                    
                            <div class="carousel-caption">
                                <div class="title"><h3><a href="assets/img/img22.jpg"><?php the_title(); ?></a></h3></div>
                            </div>

                            <div class="bg-side"><?php the_post_thumbnail();?></div>
                        </div>
                <?php
                $i++; // increment the counter
            }
            wp_reset_postdata(); // reset the post data
?>
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

<!--Menu-->

<div class="container">
    <div class="row">	
        <div class="side-menu">
            <div class="col">
                
                <div class="card-box ms-2 is-left bg-white text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>
                        <div class="title"><h3>ปฎิทินสหกิจศึกษา</h3></div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <a href="https://coopsci.rmutt.ac.th/">
                <div class="card-box ms-2 is-left bg-white text-center">
                    <div class="text sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                        <div class="title"><h3>ดาวโหลดแบบฟอร์ม</h3></div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://coopsci.rmutt.ac.th/">
                <div class="card-box ms-2 is-left bg-white text-center">
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
                <a href="">
                    <div class="card-box ms-2 is-left bg-white text-center">
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

<!--News-->
<div class="container">
        <div class="row">
            <section class="main a">

            <article>
                <div class="border-title">
                    <h2 class="section-title a">ข่าวประชาสัมพันธ์</h2>
                </div>           
            </article>
            
            <article>

<?php	// Load posts loop.
	while ( have_posts() ) : the_post();?>
                <div class="card-box is-left" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <figure class="imagestyle">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <div class="container">
                        <span><?php the_date()?></span>
                        <div class="title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>
                        <div class="content"><p><?php the_content(); ?></p>
                        </div>
                    </div>   
                    <footer class="entry-footer">
                         <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                    </footer>                          
                </div>
<?php endwhile; ?>
            </article>
            </section>
        </div>
    </div>