<?php
/*
Template Name: หน้าสำหรับ CWIE
*/
?>
<?php get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--header-->
	<div class="bg-coop-7">
		<div class="container pt-5 pb-3">
			<section class="row">
				<article class="col-md-11">
					<h1><?php the_title(); ?></h1>
				</article>
			</section>
    	</div>
	</div>

    <!--content-->
    <div class="container">
        <section class="row">
            <article class="col-md-12 py-5">
                <article class="article-content">
                    <?php the_content(); ?>
                </article>
            </article>
        </section>
    </div>
</div>

<?php get_footer(); ?>