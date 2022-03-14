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
		<a href="s_complain.php">Complain to Manager</a> <br>
		<a href="s_application.php">Application to Manager</a> <br>
		<a href="../s_controllers/s_logout.php">Logout</a>
		<a href="Edit.php">Edit</a>
</body>
</html>
