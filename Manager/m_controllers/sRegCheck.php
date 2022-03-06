<?php 
	session_start();
	
	if(isset($_REQUEST['sRegSubmit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			/*$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;*/

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen('../m_models/seller.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../../seller/s_views/s_login.php');
			
		}else{
			echo "null submission";
		}
	}
?>