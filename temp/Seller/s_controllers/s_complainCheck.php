<?php
session_start();

if(isset($_REQUEST['sComplain']))
{
    $url = '../s_models/s_complain.txt';
    $name = $_SESSION['current_worker'][0];

    date_default_timezone_set('Asia/Dhaka');
    $date = date('d/m/y  h:i a');
    
    $file = fopen($url, 'a');
    $c = $_REQUEST['complain'];
    $complain = "User Name : ".$name." > ".$c." -".$date."\r\n";
    fwrite($file,$complain);
    fclose($file);
}
?>