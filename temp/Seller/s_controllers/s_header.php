<?php 
	session_start();
	if(!isset($_COOKIE['s_status'])){
		header('location: ../s_views/s_login.php');
	}
?>