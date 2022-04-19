<?php
session_start();
require('../models/Buyermodel.php');

if(isset($_REQUEST['b_submit']))
	{
        $name = $_SESSION['current_user_b']['UserName'] ;
		if ($_FILES['pdf']['size'] == 0) 
		{
			echo "File is not selected.". "<br>";
		}else
		{

            $des = '../assets/'.$_FILES['pdf']['name'];
	        $src = $_FILES['pdf']['tmp_name'];
			move_uploaded_file($src, $des);
		}

            $status = send_app_buyer($name,$_FILES['pdf']['name']);
			if($status)
			{
				header('location: ../views/b_home.php');
			}
			else 
			{
				echo "Error";	
			}
		}

?>