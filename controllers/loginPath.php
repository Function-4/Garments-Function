<?php 

	if(isset($_REQUEST['loginSubmit'])){
        $selected = $_POST['login'];


        if($selected=='m')
        {
            header('location: ../views/m_login.php');
        }
        else if($selected=='w')
        {
            header('location: ../views/w_login.php');
        }
        else if($selected=='s')
        {
            header('location: ../views/s_login.php');
        }
        else if($selected=='b')
        {
            header('location: ../views/b_login.php');
        }

	}
    else 
    {
        echo "Invalid Request";
    }
?>