<?php 
	session_start();
	if(!isset($_COOKIE['b_status'])){
		header('location: ../b_views/b_login.php');
	}
?>