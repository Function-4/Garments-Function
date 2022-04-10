<?php
require('../controllers/header.php');
require('../models/workerModel.php');
?>
<html>
<head>
	<title>Worker List</title>
</head>

<body><br><center>
<table border="1">
			<tr><td colspan="6"><center><h1>Showing  Worker</h1></center></td></tr>
			<tr>
				<td>Serial</td>
				<td>User Name</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Contact Number</td>
			</tr>
			<?php 
				$row = view_worker();
				while($row = mysqli_fetch_assoc($result))
			{	  
			?>
			<tr>
				<td><?=$row['Serial']?></td>
				<td><?=$row['UserName']?></td>
				<td><?=$row['FirstName']?></td>
				<td><?=$row['LastName']?></td>
				<td><?=$row['Email']?></td>
				<td><?=$row['ContactNumber']?></td>
			</tr>
			<?php
			
				}
			?>
		</table>
</center>
</form>
</body><br>
</html>