<?php
/**
 * MIX Theme
 * File Description: This file contains the footer for the theme.
 * 
 * 
 * @package MIX
 * @since MIX 1.0
 */
?>

<footer>
	<div class="bg-body-1">
		<div class="container">
			<div class="row col-12 pt-4 pb-2">
				<h5 class="h5-md h6">งานสหกิจศึกษา ฝ่ายวิชาการ คณะวิทยาศาสตร์และเทคโนโลยี : RMUTT.</h5>
            	<p class="m-0 fs-md-6 small"><?php echo CONTACT_ADDRESS; ?></p>
			</div>
			<div class="row row-cols-1 row-cols-xl-3 py-3">
				<?php footer_contact_page(); ?>
			</div>
		</div>
	</div>
	<!-- ส่วนท้าย -->
	<div class="bg-body-3">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center mt-2">
					<?php printf( '<p class="m-0 fs-md-6 small">&copy; %1$s %2$s.</p>', date( 'Y' ), get_bloginfo( 'name' ) );?>
				</div>
				<div class="col-12 d-flex justify-content-center align-items-center mt-2"> 	
					<sup><small class="text-muted">Desgin by <a href="https://github.com/Mickey4527">Saran </a></small> | </sup>
					<sup><small class="text-muted"> Visual by <a href="https://www.freepik.com/">Freepik</a></small></sup>
				</div>
			</div>
      	</div>
	</div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>