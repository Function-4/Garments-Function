<?php
session_start();
require('../models/managerModel.php');
// MANAGER LOGIN
if(isset($_REQUEST['mLogin'])){
		
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null){

        $status = login($username, $password);

     if($status)
    {
        setcookie('m_status', 'true', time()+4600, '/');
        header('location: ../views/m_Home.php');
    }
    else {
        echo "not ok";

    }
           
            //
        
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}

?>