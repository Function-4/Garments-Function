<?php 
	session_start();
	
	
		
		//$username = $_REQUEST['username'];
		//$password = $_REQUEST['password'];
		//$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];

		
			
			$file = fopen('../m_models/worker.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					//$line = $id."|".$username."|".$password."|".$email."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../m_models/worker.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../m_views/deleteWorker.php');

		
	
?>