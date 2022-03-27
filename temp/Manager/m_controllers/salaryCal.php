<?php 
	session_start();
	if(isset($_REQUEST['wSalary']))
	{
		unlink('../m_models/tempSalary.txt');
		$salary = $_REQUEST['wSalaryAmmount'];
	
	
				$file = fopen('../m_models/worker.txt', 'r');
				while (!feof($file)) 
                {
					$userfile = fgets($file);
					if($userfile == null)
                    {
						break;
					}
					$user = explode("|", $userfile);
				
				$wsalary = $user[0]."|".$user[1]."|".$user[2]."|".$user[3]."|".$user[4]."|".$user[5]."|".$user[6]+$salary."\r\n";
				
				$wfile = fopen('../m_models/tempSalary.txt', 'a');
				fwrite($wfile, $wsalary);
				fclose($wfile);
			}
			copy('../m_models/tempSalary.txt','../m_models/worker.txt');
			header('location: ../m_views/notify.php');
	}

	if(isset($_REQUEST['sSalary']))
	{
		unlink('../m_models/tempSalary.txt');
		$salary = $_REQUEST['sSalaryAmmount'];
	
	
				$file = fopen('../m_models/seller.txt', 'r');
				while (!feof($file)) 
                {
					$userfile = fgets($file);
					if($userfile == null)
                    {
						break;
					}
					$user = explode("|", $userfile);
				
				$wsalary = $user[0]."|".$user[1]."|".$user[2]."|".$user[3]."|".$user[4]."|".$user[5]."|".$user[6]+$salary."\r\n";
				
				$wfile = fopen('../m_models/tempSalary.txt', 'a');
				fwrite($wfile, $wsalary);
				fclose($wfile);
			}
			copy('../m_models/tempSalary.txt','../m_models/seller.txt');
			header('location: ../m_views/notify.php');
	}
?>