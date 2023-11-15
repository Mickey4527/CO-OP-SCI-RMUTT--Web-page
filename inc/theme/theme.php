<?php
/*
    * MIX Theme, theme options
    * File Description: This file contains the theme options.
    * 
    * @package MIX
    * @since MIX 2.0
*/
function config_theme_function() {
    add_theme_page('การตั้งค่าธีม', 'การตั้งค่าธีม', 'manage_options', 'config-theme', 'config_theme_page',1);
}

function config_theme_page(){
    if(!current_user_can('manage_options')){
        wp_die('คุณไม่มีสิทธิ์ในการเข้าถึงหน้านี้');
    }
?>
    <div class="wrap">
        <h2>การตั้งค่าธีม</h2>
        <form action="options.php" method="post">
			<?php
			// Output security fields and hidden input fields
			settings_fields( 'theme_options' );
			// Output settings sections and their fields
			do_settings_sections( 'theme-options' );
			// Output submit button
			submit_button();
			?>
		</form>
    </div>

<?php }
?>