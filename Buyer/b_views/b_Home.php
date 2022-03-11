<?php
require('../b_controllers/b_header.php');
?>
<html>

<head>
	<title>Home Page buyer </title>
</head>

<body>
	<pre><h1>Welcome home !  <?= $_SESSION['current_buyer'][0] ?> buyer</h1></pre>
	<br><br>
	<a href="../b_controllers/b_logout.php">Logout</a>
</body>

</html>