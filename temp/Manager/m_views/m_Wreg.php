<?php
require('../m_controllers/m_header.php');
if(isset($_REQUEST['rWorker'])){
?>
<html>
<head>
	<title>Add Worker</title>
</head>
<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../m_controllers/m_logout.php">Logout</a></center></td>
    </tr>
    </table>

<body><br><br>
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