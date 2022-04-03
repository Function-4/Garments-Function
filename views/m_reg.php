<?php
require('../controllers/header.php');
if(isset($_REQUEST['m'])){

?>
<html>

<head>
	<title>Add Worker</title>
</head>
	<table border = "2" width=100%>  
    <tr>
	<td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="m_logout" value="Logout" style="height:50px; width:70px">
        			</form></center></td>
    </tr>
    </table>

<body><br><br>
	<form method="POST" action="../controllers/regCheck.php">
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
				<td>First Name</td>
				<td><input type="text" name="first" value=""></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="last" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input type="number" name="number" value=""></td>
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