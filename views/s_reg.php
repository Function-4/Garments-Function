<?php
require('../controllers/header.php');
if(isset($_REQUEST['rSeller'])){
?>
<script type="text/javascript" src="../assets/fv.js"></script>
<html>
<head>
	<title>Add Seller</title>
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
	<form method="POST" action="../controllers/regCheck.php" onsubmit="return reg()">
		<table>
		<tr>
				<td>Username</td>
				<td><input id="name" type="text" name="username"></td></td><td id="usernameError"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input id="pass" type="password" name="password"></td></td><td id="passError"></td>
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
				<td></td>
				<td><input type="submit" name="sRegSubmit" value="Submit"></td>
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