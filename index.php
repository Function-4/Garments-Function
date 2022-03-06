
<html>
<head>
	<title>Public Home  .... test 02</title>
</head>
<style>
	h1,h4 
	{
		display: inline-block;
	}
	p.ex1 
	{
		padding-left: 380%;
	}
</style>
<body>
	<table>
		<table border="1" width="100%">
		<tr>
			<td>
				 <pre><h1 style=font-size:25px> X Company</h1><h4><p class="ex1"><a href="publicHome.php">Public Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></pre></p></h4>
			</td>
		</tr>
		<tr height="310px">
			<td>
				<h1>Welcome to XCompany</h1>
			<form  method="POST" action="loginPath.php">
			<select name="login">
			<option value="m">Manager</option>
			<option value="w">Worker</option>
			<option value="s">Seller</option>
			<option value="b">Buyer</option>
			
		</select>
		<br>
		<hr style="width:9%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="loginSubmit" value="Submit">

	</form>
				
			</td>
		</tr>
		<tr>
			<td>
				<h3><center>Copyright &copy; 2017</center></h3>
			</td>
		</tr>
	</table>
</body>
</html>