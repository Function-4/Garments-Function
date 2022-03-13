<?php
require('../b_controllers/b_header.php');
?>

<html>
<body>
<title> Feedback </title>

<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Germents Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="#"> Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Oder Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Complain</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Request for Product</a></p></center></td>
		<td><center><p style=font-size:30px><a href="../b_controllers/b_logout.php">Logout</a></center></td>
    </tr>
</table>

<form action="" method="post">

<p style=font-size:30px><h1><center><u>Available Products</u></h1></p></center>
</form>
<center>
<table border= "2">
    <tr>
        <td>
          <center><h1> T-shirt</h1></center> 
           <br>
           <img src="../b_assets/shirt.png" height=20%>
        </td>

        <td>
          <center><h1>Shirt</h1></center> 
           <br>
           <img src="../b_assets/shirt.png" height=20%>
        </td>

        <td>
          <center><h1>Pant</h1></center> 
           <br>
           <img src="../b_assets/shirt.png" height=20%>
        </td>
    </tr>

 


</table>
</center>
</body>
</html> 


<head>
	<title>Home Page buyer </title>
</head>

<body>
	<pre><h1>Welcome home !  <?= $_SESSION['current_buyer'][0] ?> buyer</h1></pre>
	<br><br>
	<a href="../b_controllers/b_logout.php">Logout</a>
</body>

</html>

