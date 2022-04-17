<?php
require('../controllers/header.php');
?>
<script type="text/javascript" src="../assets/manager.js"></script>
<html>
<head>
	<title>Add Seller</title>
</head>
<body><br><br>
	<form method="POST" action="../controllers/regCheck.php" onsubmit="return reg()">
		<table>
		<tr><td colspan="2"><center><h1> ADD  SELLER </h1></center></td></tr>
			<tr>
				<td height = "50px">Username</td>
				<td><input id="name" type="text" name="username"></td></td><td id="usernameError"></td>
			</tr>
			<tr>
				<td height = "50px">Password</td>
				<td><input id="pass" type="password" name="password"></td></td><td id="passError"></td>
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
				<td height = "50px"></td>
				<td><input type="submit" name="sRegSubmit" value="Submit" style="height: 50px; width: 200px;"></td>
			</tr>
		</table>
	</form>
</body>
</html>