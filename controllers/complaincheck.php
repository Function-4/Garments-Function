<?php 
	session_start();
	require('../models/BuyerModel.php');

	if(isset($_REQUEST['bsubmit'])){
		
		$complain = $_REQUEST['comsubmit'];
		
		
	
			$status = b_complain($complain);
			if($status)
			{
				header('location: ../views/b_home.php');
			}
            else 
			{
				header('location: ../views/b_home.php');	
			}
		}



		?>

