<html>
<body>
    <title> Buyer Login </title>

    <link rel="stylesheet" href="../CSS/b_login.css">
    <script type="text/javascript" src="../assets/fv.js"></script>
    <br><br><br><br>
    <br><br><br><br>
    
    
    <center>
        <p1><b>Log-in As Buyer</b></p1>
</center>
<center>
	<form method="POST" action="../controllers/loginCheck.php" onsubmit="return log()">
		<table>
			<tr>
            <td> Username : <input id="name" type="text" name="username"></td><td id="usernameError">
			</tr>
			<tr>
				<td>Password : <input id="pass" type="password" name="password" ></td><td id="passError"><br><br><br>
			</tr>
			<tr>
				
				<td><input type="submit" name="bLogin" value="Login" style="height: 50px;width: 170px;"></td><br><br><br><br>
			</tr>
		</table>
	</form>
	</center>
<center>
    <br>
<p2>
   New As Buyer ??  <a href="b_req.php">Sign UP !!</a>
</p2>
<center>
</body>

</html>