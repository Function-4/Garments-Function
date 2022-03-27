<?php
session_start();

if(isset($_REQUEST['bsubmit']))
{
    $url = '../b_models/b_feedback.txt';
    $name = $_SESSION['current_worker'][0];

    date_default_timezone_set('Asia/Dhaka');
    $date = date('d/m/y  h:i a');
    
    $file = fopen($url, 'a');
    $c = $_REQUEST['mes'];
    $complain = "User Name : ".$name." > ".$c." -".$date."\r\n";
    fwrite($file,$complain);
    fclose($file);
}
?>