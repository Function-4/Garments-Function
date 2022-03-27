<?php 
	session_start();
	require('../models/sellerModel.php');
	require('../models/workerModel.php');
	//require('../models/managerModel.php');
	
	if(isset($_REQUEST['sRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$first = $_REQUEST['first'];
		$last = $_REQUEST['last'];
		
		if($username != null && $password != null && $first != null && $last != null && $email != null && $number != null)
		{
			$status = s_reg($username, $password, $first, $last, $email, $number);
			if($status)
			{
				echo "Sucessfull reg";
			}
			else 
			{
				echo "Error reg";	
			}
			
		}
		else
		{
			echo "null submission";
		}
	}

	if(isset($_REQUEST['wRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$first = $_REQUEST['first'];
		$last = $_REQUEST['last'];
		
		if($username != null && $password != null && $first != null && $last != null && $email != null && $number != null)
		{
			$status = w_reg($username, $password, $first, $last, $email, $number);
			if($status)
			{
				echo "Sucessfull reg";
			}
			else 
			{
				echo "Error reg";	
			}
			
		}
		else
		{
			echo "null submission";
		}
	}

?>