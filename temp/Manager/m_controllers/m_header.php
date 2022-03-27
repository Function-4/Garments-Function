<?php 
	session_start();
	if(!isset($_COOKIE['m_status'])){
		header('location: ../m_views/m_login.php');
	}
?>