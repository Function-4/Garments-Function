<?php 
	session_start();
	require('../models/BuyerModel.php');

	if(isset($_REQUEST['bLogin'])){
		
		$username = $_REQUEST['username'];
		$itemname = $_REQUEST['Itemname'];
		$quantity = $_REQUEST['quantity'];
		$color = $_REQUEST['color'];
		$size = $_REQUEST['size'];
		
		if($username != null && $itemname!= null && $quantity != null && $color != null && $size != null)
		{
			$status = b_product($username, $itemname, $quantity,$color,$size);
			if($status)
			{
				header('location: ../views/b_home.php');
			}
            else 
			{
				header('location: ../views/b_home.php');	
			}
		}
		else
		{
			echo "null submission";
		}
	}