<?php 
	session_start();
	require('../models/workerModel.php');
    require('../models/sellerModel.php');
	if(isset($_REQUEST['wSalary']))
	{
		$salary = $_REQUEST['wSalaryAmmount'];
		$row = view_worker();
			while($row = mysqli_fetch_assoc($result))

			{
				$name = $row['UserName'];
				$ammount = $row['Salary'] + $salary ;
				w_salary($ammount,$name);
				
			}
			header('location: ../views/provide_salary.php');
	}

    if(isset($_REQUEST['sSalary']))
	{
		$salary = $_REQUEST['sSalaryAmmount'];
		$row = view_seller();
			while($row = mysqli_fetch_assoc($result))

			{
				$name = $row['UserName'];
				$ammount = $row['Salary'] + $salary ;
				s_salary($ammount,$name);
				
			}
			header('location: ../views/provide_salary.php');
	}
?>