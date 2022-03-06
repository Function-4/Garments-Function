<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: ../s_views/s_login.php');
	}
?>