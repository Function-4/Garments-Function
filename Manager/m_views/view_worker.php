<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>Worker List</title>
</head>
<body>
        <table border="1">
			<tr>
				<td>USER NAME</td>
				<td>EMAIL</td>
				<td>Contact Number</td>
				<td>Age</td>
                <td>Gender</td>
			</tr>

			<?php 
				$file = fopen('../m_models/worker.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null){
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
				
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>