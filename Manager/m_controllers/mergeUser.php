<?php 
	session_start();
	if(isset($_REQUEST['salary'])){

        $file = fopen('../m_models/worker.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null)
                    {
						break;
					}
					$userArray = explode("|", $user);
                
		
            $wSalary = $userArray[0]."\r\n";
			$wFile = fopen('../m_models/salary.txt', 'a');
			fwrite($wFile, $wSalary);
			fclose($wFile);
        }
        $file = fopen('../m_models/seller.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null)
                    {
						break;
					}
					$userArray = explode("|", $user);
                
		
            $sSalary = $userArray[0]."\r\n";
			$sFile = fopen('../m_models/salary.txt', 'a');
			fwrite($sFile, $sSalary);
			fclose($sFile);
        }
        header('location: salaryCal.php');

	}
    else
    echo 'Invalid Request';
?>