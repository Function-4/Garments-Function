<script type="text/javascript" src="../assets/manager.js"></script>
<html>
<link rel="stylesheet" href="../CSS/test.css">
<head>
<title> Manager </title>
</head>

	<header id="header">
	<nav class="links" style="--items: 2;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="../index.php">Home</a>
	<span class="line"></span>
	</nav>
	</header>

<body>
	<center>
	<form method="POST" action="../controllers/loginCheck.php" onsubmit="return log()">
		<table>
			<tr><br><br><br><br><br><br><br><br><br><br><br>
				<td> Username : <input id="name" type="text" name="username"></td><td id="usernameError">
			</tr>
			<tr>
				<td>Password : <input id="pass" type="password" name="password" ></td><td id="passError"><br><br><br>
			</tr>
			<tr>
				
				<td><input type="submit" name="mLogin" value="Login" style="height: 50px;width: 170px;"></td><br><br><br><br>
			</tr>
		</table>
	</form>
	</center>
</body>
<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
<html>
</html>