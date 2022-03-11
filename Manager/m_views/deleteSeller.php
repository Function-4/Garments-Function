<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>Remove Seller</title>
</head>
<body>
        <table border="1">
			<tr>
                
				<td>USER NAME</td>
				<td><center>Email</center></td>
				<td>Contact Number</td>
				<td>Age</td>
                <td>Gender</td>
                <td><center>Remove</center></td>
                
			</tr>

			<?php 
				$file = fopen('../m_models/seller.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null)
                    {
						break;
					}
					$userArray = explode("|", $user);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
				<td><?=$userArray[4]?></td>
                <td><?=$userArray[5]?></td>

                

				<td><form method="POST" action="../m_controllers/removeSeller.php?id=<?=$userArray[0]?>">
                <input type="submit" name="rSeller" value="Remove this Seller" style="height:50px; width:150px">
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
