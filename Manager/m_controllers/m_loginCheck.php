<?php 
	session_start();

	if(isset($_REQUEST['mLogin'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			
			if($username == 'admin' && $password == 'admin')
            {
				//$_SESSION['m_status'] = true;
				setcookie('m_status', 'true', time()+4600, '/');
                header('location: ../m_views/m_Home.php');
            }
			echo "invalid username/password";
			}
            else{
			echo "null submission";
		}
	}
?>