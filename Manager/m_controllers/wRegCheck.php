<?php 
	session_start();
	
	if(isset($_REQUEST['wRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$age = $_REQUEST['age'];
		$gender = $_REQUEST['gender'];

		if($username != null && $password != null && $email != null){
		
			$user = $username."|".$password."|".$email."|".$contact."|".$age."|".$gender."\r\n";
			$file = fopen('../m_models/worker.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../../Worker/w_views/w_login.php');
			
		}else{
			echo "null submission";
		}
	}
?>