<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>Remove Worker</title>
</head>
<body>
        <table border="1">
			<tr>
                
				<td>USER NAME</td>
				<td><center>Email</center></td>
				<td>Contact Number</td>
				<td>Age</td>
                <td>Gender</td>
                <td><center>Ammount of Bonus</center></td>
                <td><center> Bonus</center></td>
                
			</tr>

			<?php 
				$file = fopen('../m_models/worker.txt', 'r');
				
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
                <form method="POST" action="../m_controllers/bonusCal.php?id=<?=$userArray[0]?>">
                <td>
                <input type="number" name="bAmmount" value="" style="height:50px; width:150px">
                </td>
                <td>
                <input type="submit" name="bWorker" value="provide Bonus for this Worker" style="height:50px; width:200px">
                </td>
                </form>
				
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>
