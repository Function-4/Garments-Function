<html>

<head>
	<title>Add Worker</title>
</head>

<body>
	<form method="POST" action="../m_controllers/wRegCheck.php">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input type="number" name="contact" value=""></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="number" name="age" value=""></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					<input type="radio" name="gender" value="Other"> Other
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="wRegSubmit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>

</html>