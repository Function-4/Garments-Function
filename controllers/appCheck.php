<?php
session_start();
require('../models/sellerModel.php');
require('../models/workerModel.php');
if(isset($_REQUEST['s_app']))
	{
        $name = $_SESSION['current_user']['UserName'] ;
		if ($_FILES['pdf']['size'] == 0) 
		{
			echo "File is not selected.". "<br>";
		}else
		{

            $des = '../assets/'.$_FILES['pdf']['name'];
	        $src = $_FILES['pdf']['tmp_name'];
			move_uploaded_file($src, $des);
		}

            $status = send_app($name,$_FILES['pdf']['name']);
			if($status)
			{
				header('location: ../views/s_home.php');
			}
			else 
			{
				echo "Error";	
			}
		}
if(isset($_REQUEST['w_app']))
    {
         $name = "w123" ;
         if ($_FILES['pdf']['size'] == 0) 
          {
              echo "File is not selected.". "<br>";
          }else
           {
    
                $des = '../assets/'.$_FILES['pdf']['name'];
                $src = $_FILES['pdf']['tmp_name'];
                move_uploaded_file($src, $des);
            }
    
                $status = send_app_w($name,$_FILES['pdf']['name']);
                if($status)
                {
                    header('location: ../views/w_appvac.php');
                }
                else 
                {
                    echo "Error";	
                }
            }
?>