<?php 

function b_getConnection(){
    $host = "localhost";
    $dbname= "garments";
    $dbuser = "root";
    $dbpass = "";

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $con;
}

function b_reg($feedback)
{
    $con = w_getConnection();
    $sql = "insert into buyer values ( '{$feedback}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}
?>