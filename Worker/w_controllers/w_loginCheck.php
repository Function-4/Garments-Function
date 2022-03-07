<?php 
	session_start();

	if(isset($_REQUEST['wLogin'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			
			$file = fopen('../../Manager/m_models/worker.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				if(trim($userArry[0]) == $username && trim($userArry[1]) == $password){
					$_SESSION['w_status'] = true;
					$_SESSION['current_worker'] = $userArry;
					setcookie('w_status', 'true', time()+4600, '/');
					header('location: ../w_views/w_Home.php');
				}
			}
		
			echo 'invalid username/password   <br><br><a href="../w_views/w_login.php">Back</a>';
		
		}else{
			echo 'null submission  <br><br><a href="../w_views/w_login.php">Back</a>';
		}
	}
	
?>
