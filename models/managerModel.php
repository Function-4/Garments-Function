<?php 

function getConnection(){
	$host = "localhost";
	$dbname= "garments";
	$dbuser = "root";
	$dbpass = "";

	$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $con;
}

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
		$con = getConnection();
		$sql = "insert into manager values ('', '{$username}', '{$password}', '{$first}', '{$last}', '{$email}', '{$number}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function view_app()
	{
		$con = getConnection();
		$sql = "SELECT * FROM application";
		global $result ; 
		$result = mysqli_query($con, $sql) ;
		if(mysqli_num_rows($result))
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
	function view_comp()
	{
		$con = getConnection();
		$sql = "SELECT * FROM complain";
		global $result ; 
		$result = mysqli_query($con, $sql) ;
		if(mysqli_num_rows($result))
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
	
	function view_overtime()
	{
		$con = getConnection();
		$sql = "SELECT * FROM overtime";
		global $result ; 
		$result = mysqli_query($con, $sql) ;
		if(mysqli_num_rows($result))
		{
			return $result;
		}
		else
		{
			return false;
		}
	}

?>