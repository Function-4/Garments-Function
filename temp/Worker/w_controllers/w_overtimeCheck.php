<?php
session_start();

if(isset($_REQUEST['wOvertime']))
{
    $url = '../w_models/overtime.txt';
    $name = $_SESSION['current_worker'][0];

    date_default_timezone_set('Asia/Dhaka');
    $date = date('d/m/y  h:i a');
    
    $file = fopen($url, 'a');
    $c = 'Requested';
    $complain = "User Name : ".$name." > ".$c." -".$date."\r\n";
    fwrite($file,$complain);
    fclose($file);
}
?>