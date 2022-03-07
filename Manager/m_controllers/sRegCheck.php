<?php 
	session_start();
	
	if(isset($_REQUEST['sRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$age = $_REQUEST['age'];
		$gender = $_REQUEST['gender'];

		if($username != null && $password != null && $email != null && $contact != null && $age != null && $gender != null)
		{
			$user = $username."|".$password."|".$email."|".$contact."|".$age."|".$gender."\r\n";
			$file = fopen('../m_models/seller.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../../seller/s_views/s_login.php');
		}
		else
		{
			echo "null submission";
		}
	}
?>