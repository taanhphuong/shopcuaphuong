<?php
	

	session_start();
	ob_start();

	$db_host = "localhost";
	$db_user = "phuongdz";
	$db_pass = "habeou";
	$db_data = "test";

	$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
	mysqli_set_charset($connect, 'utf8');

	$title = "Bán Acc Game - Shop Nick Giá Rẻ - Uy Tín Tại Việt Nam";
	$home_url = "http://phuong360.tk";


?>
