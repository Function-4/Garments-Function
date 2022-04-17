<?php
require('../controllers/header.php');
if(isset($_REQUEST['m'])){
?>
<script type="text/javascript" src="../assets/fv.js"></script>
<html>
<link rel="stylesheet" href="../CSS/m_home.css">
<head>
	<title>Add Worker</title>
</head>
	<header id="header">
	<nav class="links" style="--items: 4;">
	<h1 style=font-size:50px><center>Garments Function</center></h1>
	<a href="../index.php">Home</a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header>

<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<form method="POST" action="../controllers/regCheck.php" onsubmit="return reg()">
		<table>
			<tr>
				<td>Username</td>
				<td><input id="name" type="text" name="username"></td><td id="usernameError"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input id="pass" type="password" name="password"></td><td id="passError"></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input id="first" type="text" name="first"></td><td id="firstError"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input id="last" type="text" name="last"></td><td id="lastError"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input id="email" type="email" name="email"></td><td id="emailError"></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input id="number" type="number" name="number"></td><td id="numberError"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="mRegSubmit" value="Register"></td>
			</tr>
		</table>
	</form>
</body><br><br>
			<table border="1"  width="100%">
			<tr>
				<td>
					<h4>
						<center> &copy; 2022 Function,inc.</center>
					</h4>
				</td>
			</tr>
			</table>

</html>
<?php
}
?>