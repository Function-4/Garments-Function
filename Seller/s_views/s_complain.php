<?php 
    require('../s_controllers/s_header.php');
?>
<html>

<head>
	<title>Compalin to Manager</title>
</head>

<body>
	<form method="POST" action="../s_controllers/s_complainCheck.php">
		<table>
			<tr>
				<td>give complain</td>
				<td><input type="text" name="complain" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sComplain" value="Send"></td>
			</tr>
		</table>
	</form>
</body>

</html>