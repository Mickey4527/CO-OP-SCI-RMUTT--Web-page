<div class="card-box is-left" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
        <div class="thumbnail">
			<?php the_post_thumbnail(); ?>
        </div>
	</a>
    <div class="item-contents">
        <span class="date"><?php the_date()?></span>
		<div class="title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>
    </div>   
     <footer class="entry-footer">
		<a class="bi bi-arrow-right" href="<?php the_permalink(); ?>">อ่านต่อ</a>
        <?php edit_post_link(); ?>
    </footer>                          
</div>