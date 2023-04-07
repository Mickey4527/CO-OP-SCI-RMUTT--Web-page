<?php

include_once "header.php";

$page = isset($_GET['page'] ) ? $_GET['page'] : 'home' ;

	include($page.'.php');
		
 include_once "footer.php";
 
?>	
