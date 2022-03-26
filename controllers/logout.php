<?php 
if(isset($_REQUEST['m_logout']))
{   session_start();
    setcookie('m_status', 'true', time()-5, '/');
	header('location: ../index.php');
}
    
?>