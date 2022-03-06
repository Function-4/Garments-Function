<?php 
	session_start();

	if(isset($_REQUEST['sLogin'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

		$file = fopen('../../Manager/m_models/seller.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				if(trim($userArry[0]) == $username && trim($userArry[1]) == $password){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../s_views/s_Home.php');
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>