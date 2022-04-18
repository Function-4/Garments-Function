<?php
require('../controllers/header.php');
require('../models/managerModel.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
<head>
	<title>Worker's Overtime</title>
</head>
<header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header><br><br><br><br><br><br><br><br><br><br>
<body><br>
        <center>
		<table border="1">
			<tr>
				<td colspan="3">Worker's Overtime</td>
			</tr>
			<tr>
				<td>Serial</td>
				<td>User Name</td>
				<td>Status</td>
			</tr>
			<?php 
				$row = view_overtime();
				while($row = mysqli_fetch_assoc($result))
			{  
			?>
			<tr>
				<td><?=$row['Serial']?></td>
				<td><?=$row['UserName']?></td>
                <td><?=$row['Status']?></td>
				
			</tr>

			<?php
			
				}
			?>
		</table>
		</center>
</body><br>
<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>
