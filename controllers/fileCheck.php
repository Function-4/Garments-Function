<?php
session_start();
require('../models/managerModel.php');
if(isset($_REQUEST['upload']))
	{
        $name = $_SESSION['current_m']['UserName'];
        
		if ($_FILES['pdf']['size'] == 0) 
		{
			echo "File is not selected.". "<br>";
		}else
		{

            $des = '../assets/'.$_FILES['pdf']['name'];
	        $src = $_FILES['pdf']['tmp_name'];
			move_uploaded_file($src, $des);
		}

            $status = upload($name,$_FILES['pdf']['name']);
			if($status)
			{
				header('location: ../views/m_upload.php?msg=ok');
                
			}
			else 
			{
                
				header('location: ../views/m_upload.php?msg=error');	
			}
		}
        else
        {
            header('location: ../views/m_login.php');
        }

?>