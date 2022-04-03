<?php
require('../controllers/header.php');
if(isset($_REQUEST['rSeller'])){

?>
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
				<td><input id="name" type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input id="pass" type="password" name="password"></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input id="first" type="text" name="first"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input id="last" type="text" name="last"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input id="email" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input id="number" type="number" name="number"></td>
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

			<script>
				function reg(){
			let username = document.getElementById('name').value;
			let pass = document.getElementById('pass').value;
			let first = document.getElementById('first').value;
			let last = document.getElementById('last').value;
			let email = document.getElementById('email').value;
			let number = document.getElementById('number').value;

			if(username == ""){
				alert("Please Provide your Username");
				return false;
			}
			if(pass == ""){
				alert("Please Provide your Password");
				return false;
			}
			if(first == ""){
				alert("Please Provide your First Name");
				return false;
			}
			if(last == ""){
				alert("Please Provide your Last Name");
				return false;
			}
			if(email == ""){
				alert("Please Provide your Email");
				return false;
			}
			if(number == ""){
				alert("Please Provide your Number");
				return false;
			}
			return true;
		}
			</script>

</html>
<?php
}
?>