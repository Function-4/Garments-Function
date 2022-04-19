<?php
require('../controllers/header.php');
require('../models/sellerModel.php');
?>
<html>
<head>
	<title>View Product Request</title>
</head>

<body><br><center>
<table border="1">
			<tr><td colspan="6"><center><h1>Showing  Product Request</h1></center></td></tr>
			<tr>
				<td>Serial</td>
				<td>User Name</td>
				<td>Item Name</td>
				<td>Quantity</td>
				<td>Color</td>
				<td>Size</td>
			</tr>
			<?php 
				$row = view_productReq();
				while($row = mysqli_fetch_assoc($result))
			{	  
			?>
			<tr>
				<td><?=$row['serial']?></td>
				<td><?=$row['UserName']?></td>
				<td><?=$row['ItemName']?></td>
				<td><?=$row['Quantity']?></td>
				<td><?=$row['Color']?></td>
				<td><?=$row['Size']?></td>
			</tr>
			<?php
			
				}
			?>
		</table>
</center>
</form>
</body><br>
</html>