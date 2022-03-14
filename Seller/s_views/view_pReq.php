<?php
require('../s_controllers/s_header.php');
if(isset($_REQUEST['pr']))
{
    ?>
<html>
<head>
	<title>Product Request List</title>
</head>
<body>
        <table border="1">
			<tr>
				<td>USER NAME</td>
				<td>Item Name</td>
				<td>Quantity</td>
				<td>Color</td>
                <td>Size</td>
			</tr>

			<?php 
				$file = fopen('../../Buyer/b_models/b_reqproduct.txt', 'r');
				
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
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
                <td><?=$userArray[4]?></td>
				
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>
<?php
}
else 
{
    header('location: ../../index.php');
}
?>