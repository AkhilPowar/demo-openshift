<?php
	define('DB_SERVER', '172.30.45.190');
	define('DB_USERNAME', 'dummy');
	define('DB_PASSWORD', 'dummy');
	define('DB_DATABASE', 'thoughtblog');
	define('DB_PORT', '3306');
	$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE, DB_PORT);
	if (!$conn) {
		$_SESSION['login']="false";
	}
	else{
		$_SESSION['login']="true";
	}
?>
