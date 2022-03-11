<?php
require('../m_controllers/m_header.php');
//if(isset($_REQUEST['dWorker']))
//{
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
                <td><center>Remove</center></td>
                
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
				<td><a href="../m_controllers/removeWorker.php?id=<?=$userArray[0]?>"> Remove this Worker </a></td>
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>
