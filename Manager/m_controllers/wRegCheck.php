<?php 
	session_start();
	
	if(isset($_REQUEST['wRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$age = $_REQUEST['age'];
		$gender = $_REQUEST['gender'];
		$salary = '20000';

		if($username != null && $password != null && $email != null && $contact != null && $age != null && $gender != null)
		{
			$user = $username."|".$password."|".$email."|".$contact."|".$age."|".$gender."|".$salary."\r\n";
			$file = fopen('../m_models/worker.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../m_views/notify.php');
			
		}else{
			echo "null submission";
		}
	}
	else 
	echo "Invalid Request";
?>