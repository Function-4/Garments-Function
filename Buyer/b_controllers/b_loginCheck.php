<?php 
	session_start();

	if(isset($_REQUEST['bLogin'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

		$file = fopen('../../Manager/m_models/buyers.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				if(trim($userArry[0]) == $username && trim($userArry[1]) == $password){
					$_SESSION['b_status'] = true;
					$_SESSION['current_buyer'] = $userArry;
					setcookie('b_status', 'true', time()+4600, '/');
                    echo "maybe ";
					header('location: ../b_views/b_Home.php');
				}
			}

			echo 'invalid username/password   <br><br><a href="../s_views/s_login.php">Back</a>';

		}else{
			echo 'null submission  <br><br><a href="../s_views/s_login.php">Back</a>';
		}
	}
?>