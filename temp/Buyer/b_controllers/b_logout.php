<?php 
    session_start();
    setcookie('b_status', 'true', time()-5, '/');
	header('location: ../../index.php');
?>