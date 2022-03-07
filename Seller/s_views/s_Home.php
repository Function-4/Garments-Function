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
		<a href="../s_controllers/s_logout.php">Logout</a>
</body>
</html>
