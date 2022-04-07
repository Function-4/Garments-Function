<?php 

if(isset($_REQUEST['bLogin']))
{
		
    $feedback = $_REQUEST['feedback'];


    if($feedback != null){

        $status = b_login($username, $password);

     if($status)
    {
        setcookie('b_status', 'true', time()+8600, '/');
        header('location: ../views/b_home.php');
    }
    else {
        echo "not ok";

    }       
        //echo 'invalid username/password   <br><br><a href="../m_views/m_login.php">Back</a>';
        }
        else{
        echo 'null submission  <br><br>';
    }
}

?>