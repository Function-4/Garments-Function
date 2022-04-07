<?php 

function b_getConnection(){
    $host = "localhost";
    $dbname= "germents";
    $dbuser = "root";
    $dbpass = "";

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $con;
}

	function b_login($username, $password)
    {
		$con = b_getConnection();

		$sql = "select * from buyer where UserName='{$username}' and Password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	

	function b_reg($first, $last, $username, $password,$email, $number){
		$con = b_getConnection();
		$sql = "insert into buyer values ('', '{$first}', '{$last}', '{$username}', '{$password}', '{$email}', '{$number}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>