<html>

<head>
	<title>Manager </title>
</head>
<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
		<td><center><p style=font-size:30px><a href="../index.php">Home</a></center></td>
    </tr>
</table>

<body>
	<form method="POST" action="../controllers/loginCheck.php" onsubmit="return log()">
		<table width="100%">
			<tr><br><br><br><br><br><br><br><br><br><br><br>
				<td> Username : <input id="name" type="text" name="username" ></td> 
			</tr>
			<tr>
				<td>Password : <input id="pass" type="password" name="password" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="mLogin" value=" Login "></td>
			</tr>
		</table>
	</form>
</body><br><br><br><br><br><br><br><br><br>
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
				function log(){
			let username = document.getElementById('name').value;
			let pass = document.getElementById('pass').value;

			if(username == ""){
				alert("Please Provide your Username");
				return false;
			}
			if(pass == ""){
				alert("Please Provide your Password");
				return false;
			}
			return true;
		}
			</script>

</html>