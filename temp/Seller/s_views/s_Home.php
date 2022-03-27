<?php 
    require('../s_controllers/s_header.php');
?>
<html>
<head>	
	<title>Home Page Worker </title>
</head>
<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../s_controllers/s_logout.php">Logout</a></center></td>
    </tr>
    </table>
<body><br>
	<pre><h1>Welcome home !  <?=$_SESSION['current_seller'][0]?> Seller</h1></pre> 
	<br><br>
		<form method="POST" action="s_complain.php">
		<td><input type="submit" name="" value="Complain to Manager"></td>
		</form>

		<form method="POST" action="s_application.php">
		<td><input type="submit" name="pr" value="Application to Manager"></td>
		</form>
		
		<form method="POST" action="view_pReq.php">
		<td><input type="submit" name="pr" value="View Product Request"></td>
		</form>
		
		<form method="POST" action="view_feedback.php">
		<td><input type="submit" name="" value="View Buyer's Feedback"></td>
		</form><br><br>
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
