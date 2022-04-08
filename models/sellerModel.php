<?php 
	function s_getConnection(){
		$host = "localhost";
		$dbname= "germents";
		$dbuser = "root";
		$dbpass = "";

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}

	function sLogin($username, $password){
		$con = s_getConnection();

		$sql = "select * from seller where UserName='{$username}' and Password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function s_reg($username, $password, $first, $last, $email, $number){
		$con = s_getConnection();
		$sql = "insert into seller values ('', '{$username}', '{$password}', '{$first}', '{$last}', '{$email}', '{$number}','20000')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function view_seller()
	{
		$con = s_getConnection();
		$sql = "SELECT Serial,UserName,FirstName,LastName,Email,ContactNumber FROM seller";
		//global $c ;
		//$c = 0 ;
		global $result ; 
		//$array = array();
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

	function s_delete($name)
	{
		$con = w_getConnection();
		$sql = "DELETE FROM seller WHERE UserName = '{$name}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>