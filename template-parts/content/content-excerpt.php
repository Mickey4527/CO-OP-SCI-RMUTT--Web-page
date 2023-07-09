<div class="card-box border border-1" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
        <div class="thumbnail">
			<?php if(has_post_thumbnail()): the_post_thumbnail(); else: echo '<img class="mix-card_img" loading="lazy" alt ="logo slide show" src="https://coopsci.rmutt.ac.th/wp-content/uploads/2023/05/1920-4.png">'; endif; ?>
        </div>
	</a>
    <div class="item-contents">
        <span class="date"><?php the_time('j F Y');?></span>
		<div class="title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></div>
    </div>   
     <footer class="entry-footer">
		<a class="bi bi-arrow-right" href="<?php the_permalink(); ?>">อ่านต่อ</a>
        <?php edit_post_link(); ?>
    </footer>                          
</div>