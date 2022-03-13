<?php
require('../m_controllers/m_header.php');
if(isset($_REQUEST['vSeller']))
{
    ?>
<html>
<head>
	<title>Seller List</title>
</head>
<table border = "2" width=100%>  
        <tr>
                <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../m_controllers/m_logout.php">Logout</a></center></td>
        </tr>
        </table>
<body><br>
        <table border="1">
			<tr>
				<td>USER NAME</td>
				<td>EMAIL</td>
				<td>Contact Number</td>
				<td>Age</td>
                <td>Gender</td>
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
				
			</tr>

			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body><br>
<table border="1"  width="100%">
			<tr>
				<td>
					<h4>
						<center> &copy; 2022 Function,inc.</center>
					</h4>
				</td>
			</tr>
			</table>
</html>
<?php
}
else 
{
    header('location: ../../index.php');
}
?>