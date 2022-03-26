<?php 

function getConnection(){
		$host = "localhost";
		$dbname= "garments";
		$dbuser = "root";
		$dbpass = "";

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}

?>