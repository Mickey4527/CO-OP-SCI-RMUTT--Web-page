<?php  
 
function listcontent(){
    if (isset($_GET['cat']) || isset($_GET['s'])) {?>
        <div class="col-md-12 py-3 ps-4">
            <h4><?php printf( esc_html__( 'ผลการค้นหา : %s', 'mix style' ), '<span>"' . get_search_query() . '"</span>' ); ?></h4>
        </div>
        
        <div class="col-md-12">
            <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 12,
			'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        );
    
        if (isset($_GET['cat']) && !empty($_GET['cat'])) {
            $args['cat'] = intval($_GET['cat']);
        }
    
        if (isset($_GET['s']) && !empty($_GET['s'])) {
            $args['s'] = sanitize_text_field($_GET['s']);
        }
    

    $query = new WP_Query($args);
       
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            archive_card();
       ?>
       <?php }
       } 
												   
      $total_pages = $query->max_num_pages;

            if ($total_pages > 1) {
                ?>
                <div class="col-md-12">
                    <article class="d-inline-block py-5 text-center">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'           => 2,
                            'prev_text'          => esc_html__('Previous', 'mix style'),
                            'next_text'          => esc_html__('Next', 'mix style'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'mix style') . ' </span>',
                            'total'              => $total_pages,
                            'current'            => max(1, get_query_var('paged')),
                        ));
                        ?>
                    </article>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
    } else { get_template_part( 'template-parts/content/content', 'none' ); 
    } wp_reset_postdata(); 
 }
?>
