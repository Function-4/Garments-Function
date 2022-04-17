<?php
session_start();
require('../models/managerModel.php');
require('../models/Buyermodel.php');
require('../models/sellermodel.php');
require('../models/workermodel.php');
// MANAGER LOGIN
if(isset($_REQUEST['mLogin']))
{
		
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
         header('location: ../views/error.php');

    }
           
            //
        
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}

//Buyer Login



if(isset($_REQUEST['bLogin']))
{
		
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null){

        $status = b_login($username, $password);

     if($status)
    {
        setcookie('b_status', 'true', time()+8600, '/');
        header('location: ../views/b_home.php');
    }
    else {
        header('location: ../views/error.php');

    }       
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}




//seller login 

if(isset($_REQUEST['sLogin']))
{
		
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null){

        $status = sLogin($username, $password);

     if($status)
    {
        setcookie('s_status', 'true', time()+8600, '/');
        header('location: ../views/s_home.php');
    }
    else {
        header('location: ../views/error.php');

    }       
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}


//worker login


if(isset($_REQUEST['wLogin']))
{
		
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username != null && $password != null){

        $status = wLogin($username, $password);

     if($status)
    {
        setcookie('s_status', 'true', time()+8600, '/');
        header('location: ../views/w_home.php');
    }
    else {
        header('location: ../views/error.php');

    }       
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}
?>