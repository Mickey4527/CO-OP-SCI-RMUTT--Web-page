<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 *
 */

get_header();
?>

<main class="container d-flex align-items-center" id="content" style="height: auto; min-height: calc(100vh - 15rem);">
	<div class="row my-auto p-5">
		<div class="col-12">
			<h1 class="display-1 text-organ-600">404</h1>
			<h2>ไม่พบหน้าเว็บนี้ กรุณาตรวจสอบ URL อีกครั้ง</h2>
			<a href="<?php echo get_home_url(); ?>" class="btn-box border border-3 mt-3">กลับสู่หน้าหลัก</a>
		</div>
	</div>
</main>

<?php
get_footer();
?>