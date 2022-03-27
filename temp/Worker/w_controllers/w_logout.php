<?php 
    session_start();
    setcookie('w_status', 'true', time()-5, '/');
	header('location: ../../index.php');
?>