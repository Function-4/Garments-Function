<?php 
	session_start();
    require('../models/workerModel.php');
    require('../models/sellerModel.php');
    if(isset($_REQUEST['rWorker']))
    {
        $name = $_REQUEST['id'];
        $status = w_delete($name);
			if($status)
			{
				echo "done";
			}
			else 
			{
				echo "Error";	
			}

			header('location: ../views/delete_W.php');
    }
    else
    {
        echo 'Invalid Request';
    }

    if(isset($_REQUEST['rSeller']))
    {
        $name = $_REQUEST['id'];
        $status = s_delete($name);
			if($status)
			{
				echo "Done";
			}
			else 
			{
				echo "Error";	
			}

			header('location: ../views/delete_S.php');
    }
    else
    {
        echo 'Invalid Request';
    }
		
?>