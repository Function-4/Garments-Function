<?php 
	session_start();
	require('../models/sellerModel.php');
	require('../models/workerModel.php');
	require('../models/BuyerModel.php');
	require('../models/managerModel.php');

	if(isset($_REQUEST['mRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$first = $_REQUEST['first'];
		$last = $_REQUEST['last'];
		
		if($username != null && $password != null && $first != null && $last != null && $email != null && $number != null)
		{
			$status = m_reg($username, $password, $first, $last, $email, $number);
			if($status)
			{
				header('location: ../views/m_reg.php?msg=ok');
			}
			else 
			{
				header('location: ../views/m_reg.php?msg=error');	
			}
			
		}
		else
		{
			echo "null submission";
		}
	}
	
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
				header('location: ../views/add_Employee.php?msg=ok');
			}
			else 
			{
				header('location: ../views/add_Employee.php?msg=error');	
			}
			
		}
		else
		{
			echo "null submission";
		}
	}

	if(isset($_REQUEST['wRegSubmit']))
	{
		
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
				header('location: ../views/add_Employee.php?msg=ok');
			}
			else 
			{
				header('location: ../views/add_Employee.php?msg=error');	
			}
			
		}
		else
		{
			echo "null submission";
		}
	}


//buyer

	if(isset($_REQUEST['bRegSubmit']))
	{
		$first = $_REQUEST['first'];
		$last = $_REQUEST['last'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['contact'];
		
		
		if($username != null && $password != null && $first != null && $last != null && $email != null && $number != null)
		{
			$status = b_reg($first,$last,$username,$password,$email,$number);
			if($status)
			{
				header('location: ../views/b_login.php');	
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
