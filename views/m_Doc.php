<?php
require('../models/managerModel.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
<head>
	<title>Company's Document</title>
</head>
<body><br>
        <center>
		<table border="1">
			<tr>
				<td colspan="4">Company's Document</td>
			</tr>
			<tr>
				<td>Serial</td>
				<td>User Name</td>
				<td>Role</td>
				<td>File</td>
			</tr>
			<?php 
				$row = view_doc();
				while($row = mysqli_fetch_assoc($result))
			{  
			?>
			<tr>
				<td><?=$row['Serial']?></td>
				<td><?=$row['UserName']?></td>
				<td><?=$row['Role']?></td>
				<td><a href="../assets/<?=$row['File']?>" download> download file </a></td>
			</tr>

			<?php
			
				}
			?>
		</table>
		</center>
</body><br>
</html>
