<?php 
	session_start();
	require('../models/BuyerModel.php');
	require('../models/workerModel.php');

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

		if(isset($_REQUEST['w_comp']))
		{
			 $name = $_SESSION['current_user_w']['UserName'] ;
			 if ($_FILES['pdf']['size'] == 0) 
			  {
				  echo "File is not selected.". "<br>";
			  }else
			   {
		
					$des = '../assets/'.$_FILES['pdf']['name'];
					$src = $_FILES['pdf']['tmp_name'];
					move_uploaded_file($src, $des);
				}
		
					$status = send_comp_w($name,$_FILES['pdf']['name']);
					if($status)
					{
						header('location: ../views/w_home.php');
					}
					else 
					{
						echo "Error";	
					}
				}

		?>

