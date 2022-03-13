<?php 
    require('../s_controllers/s_header.php');
?>
<html>
<head>	
	<title>Home Page Worker </title>
</head>
<body>
<table border = "2" width=100%>
    <tr>
	
        <td><h1 style=font-size:50px><center>Germents Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="#">Home</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#">Profile</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#">Logout</a> </p></center></td>
		
    </tr>
</table>

<pre><h1>Welcome home !  <?=$_SESSION['current_seller'][0]?> Seller</h1></pre> 
<br><br>
<center>
<br></br>
<table>
		<tr>
			<td><center><button type="button"><p style=font-size:20px><a href="#">Product</a></p></button></center></td>
		</tr>
		<tr>
			<td><center><button type="button"><p style=font-size:20px><a href="#">Manager</a></p></button></center></td>
		</tr>
		<tr>
			<td><center><button type="button"><p style=font-size:20px><a href="#">Buyer</a></p></button></center></td>
		</tr>
		<tr>
			<td><center><button type="button"><p style=font-size:20px><a href="#">Salary</a></p></button></center></td>
		</tr>
</table>
</center>
</body>
</html>
