<?php
require('../controllers/header.php');
require('../models/sellerModel.php');
?>
<html>
<head>
	<title>Remove Seller</title>
</head>
<body><br>
        <table border="1">
		<tr><td colspan="7"><center><h1> DELETE   SELLER </h1></center></td></tr>
			<tr>
                
				<td>Serial</td>
				<td>User Name</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Contact Number</td>
                
			</tr>

			<?php 
				$row = view_seller();
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
				<td><form method="POST" action="../controllers/remove_Employee.php?id=<?=$row['UserName']?>">
                <input type="submit" name="rSeller" value="Remove this Seller" style="height:50px; width:220px">
                </form></td>

			</tr>

			<?php
				}
			?>	
		</table>
		</fieldset>
	</form>
</body>
</html>
