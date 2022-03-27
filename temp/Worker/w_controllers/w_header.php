<?php 
	session_start();
	if(!isset($_COOKIE['w_status'])){
		header('location: ../w_views/w_login.php');
	}
?>