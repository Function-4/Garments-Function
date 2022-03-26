<?php
require('../controllers/header.php');
require('../models/workerModel.php');
if(isset($_REQUEST['vWorker']))
{
    ?>
<html>
<head>
	<title>Worker List</title>
</head>
<table border = "2" width=100%>  
        <tr>
                <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="m_logout" value="Logout" style="height:50px; width:70px">
        			</form></center></td>
        </tr>
        </table>
<body><br>
        <table border="1">
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
				//$result = global $r ;  
				for($i = 0 ; $c > $i ; $c--) {
					//echo "Serial : " . $row["Serial"]. " - Name: " . $row["FirstName"]. " " . "<br>";
				  
			?>

			<tr>
				<td><?=$row['Serial'.$c]?></td>
				<td><?=$row['UserName'.$c]?></td>
				<td><?=$row['FirstName'.$c]?></td>
				<td><?=$row['LastName'.$c]?></td>
				<td><?=$row['Email'.$c]?></td>
				<td><?=$row['ContactNumber'.$c]?></td>
				
				
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
    header('location: ../index.php');
}
?>