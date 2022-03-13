<?php 

session_start();

	$des = '../s_models/'.$_FILES['pdffile']['name'];
	$src = $_FILES['pdffile']['tmp_name'];

	//echo $des;

	if(move_uploaded_file($src, $des)){
		$_SESSION['pdf'] = $_FILES['pdffile']['name'];
		//header('location: home.php');
	}else{
		echo "error";
	}

    $url = '../s_models/s_application.txt';
    $name = $_SESSION['current_worker'][0];

    date_default_timezone_set('Asia/Dhaka');
    $date = date('d/m/y  h:i a');
    
    $file = fopen($url, 'a');
    $c = '<a href="../../Seller/s_models/'.$_FILES['pdffile']['name'].'">View</a>';
    $complain = "User Name : ".$name." > ".$c." -".$date."\r\n";
    fwrite($file,$complain);
    fclose($file);
?>