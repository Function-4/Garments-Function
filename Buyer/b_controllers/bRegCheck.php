<?php 
	session_start();
	
	if(isset($_REQUEST['bRegSubmit'])){
		
        $name1 = $_REQUEST['1name'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		

		if($username != null && $password != null && $email != null && $contact != null && $name1 != null )
		{
			$user = $username."|".$password."|".$email."|".$contact."|".$name1."|"."\r\n";
			$file = fopen('../../Manager/m_models/buyer.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../b_views/b_login.php');
		}
		else
		{
			echo "null submission";
		}
	}
?>