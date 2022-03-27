<?php
require('../controllers/header.php');
require('../models/workerModel.php');
?>
<html>
<head>
	<title>Remove Worker</title>
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
                <input type="submit" name="rWorker" value="Remove this Worker" style="height:50px; width:150px">
                </form></td>
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