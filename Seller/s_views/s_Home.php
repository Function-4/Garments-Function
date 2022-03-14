<?php 
    require('../s_controllers/s_header.php');
?>
<html>
<head>	
	<title>Home Page Worker </title>
</head>
<body>
	<pre><h1>Welcome home !  <?=$_SESSION['current_seller'][0]?> Seller</h1></pre> 
	<br><br>
		<form method="POST" action="s_complain.php">
		<td><input type="submit" name="" value="Complain to Manager"></td>
		</form>

		<form method="POST" action="s_application.php">
		<td><input type="submit" name="pr" value="Application to Manager"></td>
		</form>
		
		<form method="POST" action="view_pReq.php">
		<td><input type="submit" name="pr" value="View Product Request"></td>
		</form>
		
		<form method="POST" action="view_feedback.php">
		<td><input type="submit" name="" value="View Buyer's Feedback"></td>
		</form><br><br>
		<a href="../s_controllers/s_logout.php">Logout</a>
</body>
</html>
