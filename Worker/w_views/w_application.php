<?php 
    require('../w_controllers/w_header.php');
?>
<html>

<head>
	<title>Application to Manager</title>
</head>

<body>
    <form method="POST" action="../w_controllers/w_fileCheck.php" enctype="multipart/form-data">  
		<table>
			<tr>
				<td>give Application</td>
				<td><input type="file" name="pdffile" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="wComplain" value="Send"></td>
			</tr>
		</table>
	</form>
</body>

</html>