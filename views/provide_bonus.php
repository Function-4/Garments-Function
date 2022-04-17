<?php
require('../controllers/header.php');
require('../models/workerModel.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
<head>
	<title>Provide Bonus to Worker</title>
</head>
<header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<body><br>
        <center>
		<table border="1">
		<tr><td colspan="8" id="bError"></td></tr>
			<tr>
                
				<td>Serial</td>
				<td>User Name</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td><center>Ammount of Bonus</center></td>
                <td><center> Bonus</center></td>
                
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
				<form method="POST" action="../controllers/bonus.php?id=<?=$row['UserName']?> & current=<?=$row['Salary']?>" onsubmit="return bonus()">
				<td><input id="b" type="number" name="bAmmount"style="height:50px; width:150px">
                </td>
				<td>
                <input type="submit" name="bWorker" value="Provide Bonus for this Worker" style="height:50px; width:290px">
                </form></td>
			</tr>
			<?php
				}
			?>
		</table>
		</center>
		</fieldset>
	</form>
</body><br>
<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>