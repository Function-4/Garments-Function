<?php 
	session_start();
	
	if(isset($_REQUEST['bWorker'])){
		unlink('../m_models/tempSalary.txt');
		$id = $_REQUEST['id'];
        $salary = $_REQUEST['bAmmount'];

		
			
			$file = fopen('../m_models/worker.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $user[0]."|".$user[1]."|".$user[2]."|".$user[3]."|".$user[4]."|".$user[5]."|".$user[6]+$salary."\r\n";
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../m_models/tempSalary.txt', 'w');
			fwrite($file, $updatedContent);
			

            copy('../m_models/tempSalary.txt','../m_models/worker.txt');
            header('location: ../m_views/provideBonus.php');

		
	}
?>