<?php
require('../controllers/header.php');
if(isset($_REQUEST['m'])){
?>
<html>
<link rel="stylesheet" href="../CSS/test.css">
<script type="text/javascript" src="../assets/fv.js"></script>

<head>
	<title>Add Worker</title>
</head>
	<header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header>

<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<form method="POST" action="../controllers/regCheck.php" onsubmit="return reg()">
		<center>
		<table>
			<tr>
				<td height = "50px">Username</td>
				<td><input id="name" type="text" name="username"></td><td id="usernameError"></td>
			</tr>
			<tr>
				<td height = "50px">Password</td>
				<td><input id="pass" type="password" name="password"></td><td id="passError"></td>
			</tr>
			<tr>
				<td height = "50px">First Name</td>
				<td><input id="first" type="text" name="first"></td><td id="firstError"></td>
			</tr>
			<tr>
				<td height = "50px">Last Name</td>
				<td><input id="last" type="text" name="last"></td><td id="lastError"></td>
			</tr>
			<tr>
				<td height = "50px">Email</td>
				<td><input id="email" type="email" name="email"></td><td id="emailError"></td>
			</tr>
			<tr>
				<td height = "50px">Contact Number</td>
				<td><input id="number" type="number" name="number"></td><td id="numberError"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="mRegSubmit" value="Register" style="height: 50px; width: 200px;"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>
<?php
}
?>