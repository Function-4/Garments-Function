<?php 
	session_start();
    require('../models/workerModel.php');
    if(isset($_REQUEST['bWorker']))
    {
        $name = $_REQUEST['id'];
        $bonus = $_REQUEST['bAmmount'];
        $current = $_REQUEST['current'];
        $status = w_bonus($name,$current,$bonus);
			if($status)
			{
				echo "done";
			}
			else 
			{
				echo "Error";	
			}

			header('location: ../views/provide_bonus.php');
    }
    else
    {
        echo 'Invalid Request';
    }

		
?>