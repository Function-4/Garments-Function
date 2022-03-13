<?php 
    require('../w_controllers/w_header.php');
?>
<html>

<head>
	<title>Overtime Request</title>
</head>

<body>
	<form method="POST" action="../w_controllers/w_overtimeCheck.php">
		<table>
			<tr>
				<td><input type="submit" name="wOvertime" value="Send"></td>
			</tr>
		</table>
	</form>
</body>

</html>