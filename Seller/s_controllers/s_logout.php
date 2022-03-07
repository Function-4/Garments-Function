<?php 
    session_start();
    setcookie('s_status', 'true', time()-5, '/');
	header('location: ../../index.php');
?>