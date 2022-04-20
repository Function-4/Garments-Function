<?php
	
	$data = $_REQUEST['mydata'];
	$json = json_decode($data);
	echo $json->Mission;
    echo $json->Description;
?>