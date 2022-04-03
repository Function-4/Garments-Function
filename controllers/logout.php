<?php 
$role = $_GET['id'];
if($role == "m")
{   session_start();
    setcookie('m_status', 'true', time()-5, '/');
	header('location: ../index.php');
}



if(isset($_REQUEST['b_logout']))
{   session_start();
    setcookie('b_status', 'true', time()-5, '/');
	header('location: ../index.php');
}
    
?>



