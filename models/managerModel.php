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

	function m_reg($username, $password, $first, $last, $email, $number){
		$con = s_getConnection();
		$sql = "insert into manager values ('', '{$username}', '{$password}', '{$first}', '{$last}', '{$email}', '{$number}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>