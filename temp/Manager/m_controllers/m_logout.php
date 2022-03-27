<?php 
    session_start();
    setcookie('m_status', 'true', time()-5, '/');
	header('location: ../../index.php');
?>