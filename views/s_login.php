<html>
    <title>Seller Login</title>

    <body>
    <link rel="stylesheet" href="../CSS/s_css.css">
	<script type="text/javascript" src="../assets/fv.js"></script>


    <center>
<div>
        <p3><center><u>Seller-Login</u></center></p3>




		<form method="POST" action="../controllers/loginCheck.php" onsubmit="return log()">
		<table>
			<tr>
            <td> Username : <input id="name" type="text" name="username"></td><td id="usernameError">
			</tr>
			<tr>
				<td>Password : <input id="pass" type="password" name="password" ></td><td id="passError"><br><br><br>
			</tr>
		</table>
        <center><td><input type="submit" name="sLogin" value="Login" style="height: 50px;width: 170px;"></td></center>
  
    
	</form>
    </div>


</div>
    </center>
    
    </body>
</html>