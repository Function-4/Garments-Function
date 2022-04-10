<?php 

function w_getConnection(){
	$host = "localhost";
	$dbname= "germents";
	$dbuser = "root";
	$dbpass = "";

	$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $con;
}

	function wLogin($username, $password){
		$con = w_getConnection();

		$sql = "select * from worker where UserName='{$username}' and Password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function w_reg($username, $password, $first, $last, $email, $number){
		$con = w_getConnection();
		$sql = "insert into worker values ('', '{$username}', '{$password}', '{$first}', '{$last}', '{$email}', '{$number}','20000')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function view_worker()
	{
		$con = w_getConnection();
		$sql = "SELECT Serial,UserName,FirstName,LastName,Email,ContactNumber,Salary FROM worker";
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
	function w_delete($name)
	{
		$con = w_getConnection();
		$sql = "DELETE FROM worker WHERE UserName = '{$name}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function w_bonus($name,$current,$bonus)
	{
		$con = w_getConnection();
		$sql = "UPDATE worker SET Salary = {$current}+{$bonus} WHERE UserName = '{$name}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function w_salary($ammount,$name)
	{
		$con = w_getConnection();
		$sql = "UPDATE worker SET Salary = '{$ammount}' WHERE UserName = '{$name}'";
		
		$result = mysqli_query($con, $sql) ;
		if($result){
			return true;
		}else{
			return false;
		}
	}

?>