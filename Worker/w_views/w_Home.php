<?php 
    require('../w_controllers/w_header.php');
?>
<html>
<head>	
	<title>Home Page Worker </title>
</head>
<body>
	<pre><h1>Welcome home !  <?=$_SESSION['current_worker'][0]?> Worker</h1></pre> 
	<br><br>
		<a href="w_complain.php">Complain to Manager</a> <br>
		<a href="../w_controllers/w_logout.php">Logout</a>
</body>
</html>
