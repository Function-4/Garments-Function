<?php 

	require('db.php');

	function login($username, $password){
		$con = getConnection();

		$sql = "select * from Manager where UserName='{$username}' and Password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($username, $password, $email){
		$con = getConnection();
		$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>