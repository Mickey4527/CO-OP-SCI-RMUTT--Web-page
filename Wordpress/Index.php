<?php

get_header(); 
?>
<?php

$page = isset($_GET['page'] ) ? $_GET['page'] : 'home' ;

	include($page.'.php');
		
?>
	<?php
		get_footer();