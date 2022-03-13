<?php 
	session_start();
	
	if(isset($_REQUEST['bLogin'])){
		
        $name = $_REQUEST['username'];
		$Itemname = $_REQUEST['Itemname'];
		$Quantity = $_REQUEST['quantity'];
		$eColor = $_REQUEST['color'];
		$Size = $_REQUEST['size'];
		

		if($name != null && $Itemname != null && $Quantity != null && $eColor != null && $Size != null )
		{
			$order = $name."|". $Itemname."|".$Quantity."|".$eColor."|".$Size."|"."\r\n";
			$file = fopen('../b_models/orderproduct.txt', 'a');
			fwrite($file, $order);
			fclose($file);
			//header('location: ../b_views/b_login.php');
		}
		else
		{
			echo "null submission";
		}
     }
?>