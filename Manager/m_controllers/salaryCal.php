<?php 
	session_start();
    //$monthlySalary = '5000' ;

	$file = fopen('../m_models/salary.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null)
                    {
						break;
					}
					//$userArray = explode("|", $user);
                
		
            $wSalary = $user[0]."\r\n";
			$wFile = fopen('../m_models/salary.txt', 'a');
			fwrite($wFile, $wSalary);
			fclose($wFile);
        }

?>