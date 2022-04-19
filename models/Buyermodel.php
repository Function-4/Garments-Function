<?php 

function b_getConnection(){
    $host = "localhost";
    $dbname= "garments";
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

	

	function b_reg($first, $last, $username, $password,$email, $number)
	{
		$con = b_getConnection();
		$sql = "insert into buyer values ('', '{$first}', '{$last}', '{$username}', '{$password}', '{$email}', '{$number}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function b_product($username, $itemname, $quantity,$color,$size)
	{
		$con = b_getConnection();
		$sql = " insert into product values ('', '{$username}', '{$itemname}', '{$quantity}', '{$color}', '{$size}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function b_order($username, $itemname, $quantity,$color,$size)
	{
		$con = b_getConnection();
		$sql = " insert into order_product values ('', '{$username}', '{$itemname}', '{$quantity}', '{$color}', '{$size}')";

		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}



	function  b_complain($complain)
	{
		$con = b_getConnection();
		$sql = " INSERT INTO b_complain VALUES ('','{$complain}')";

		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}



?>