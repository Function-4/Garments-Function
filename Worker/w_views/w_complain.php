<?php 
    require('../w_controllers/w_header.php');
?>
<html>

<head>
	<title>Manager </title>
</head>

<body>
	<form method="POST" action="../w_controllers/w_complainCheck.php">
		<table>
			<tr>
				<td>give complain</td>
				<td><input type="text" name="complain" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="wComplain" value="Send"></td>
			</tr>
		</table>
	</form>
</body>

</html>