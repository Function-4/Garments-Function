<?php 
	session_start();
	if(!isset($_COOKIE['m_status'])){
	header('location: ../views/m_login.php');
	}
?>