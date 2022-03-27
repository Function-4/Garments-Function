<?php 
    
	if(isset($_REQUEST['loginSubmit'])){
        $selected = $_POST['login'];


        if($selected=='m')
        {
            header('location: ../../Manager\m_views\m_login.php');
        }
        else if($selected=='w')
        {
            header('location: ../../Worker\w_views\w_login.php');
        }
        else if($selected=='s')
        {
            header('location: ../../Seller\s_views\s_login.php');
        }
        else if($selected=='b')
        {
            header('location: ../../Buyer\b_views\b_login.php');
        }

	}
    else 
    {
        echo "Invalid Request";
    }
?>