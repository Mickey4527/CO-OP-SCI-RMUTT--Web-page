<!--Carousel-->
<div class="container-fluid py-xl-0 px-0 carousel-page">
    <?php 
        carousel_feed(CARO_name);
    ?>
</div>

<!--Menu-->
<div class="container-xxl p-4">
    <div class="row-md">
        <div class="row col-md-12 mb-3 d-flex align-items-center justify-content-evenly">
            <h2 class="h3 my-5 text-center">เมนูนำทาง</h2>
            <?php
                menu_feed();
            ?>
        </div>
    </div>
</div>

<!--CWIE-->
<div class="bg-body-1 mt-3 ">
    <div class="container-xxl py-5">    
            <?php spContent(); ?>
    </div>
</div>

<?php 
    $category_id = get_cat_ID(CAT_NAME_PRIMATY); // Get the ID of a given category
    $category_link = get_category_link( $category_id );// Get the URL of this category
?>

<!--News-->
<div class="container-lg py-5">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills tab mb-3 w-100 fw-bold" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn-box mx-md-3 mx-1 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        ข่าวสารสหกิจศึกษา</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn-box mx-md-3 mx-1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                        ประชาสัมพันธ์</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn-box mx-md-3 mx-1" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                        ผลงานรางวัล</button>
                </li>
            </ul>
        </div>

        <div class="col-12" style="min-height: 120px;">
            <div class="tab-content p-4" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="row">
                        <?php 
                            news_feed_box(CAT_NAME_PRIMATY,NEWS_LIMIT);
                         ?>
                    </div>  
                </div>
                
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="row">
                        <?php 
                            news_feed_box(CAT_NAME_SECONDARY,NEWS_LIMIT);
                        ?>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="row">
                        <?php 
                            news_feed_box(CAT_NAME_AWARD,NEWS_LIMIT);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end News-->

<!--video-->
<?php //get_template_part( 'template-parts/content/content-widget' ); <= disable default ?>



<!--link-->
<div class="bg-body-2 mt-3">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 mb-2 text-center">
                <h4>ลิงก์ที่เกี่ยวข้อง</h4> 
            </div>
            
            <div class ="col-md-12 row mt-3 justify-content-center">
                <?php
                    link_feeds();
                ?>
            </div>
        </div>
    </div>
</div>