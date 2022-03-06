<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: ../w_views/w_login.php');
	}
?>