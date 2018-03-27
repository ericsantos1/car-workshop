


<?php
ini_set('default_charset','UTF-8');
error_reporting(0);


	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location:./");

?>
