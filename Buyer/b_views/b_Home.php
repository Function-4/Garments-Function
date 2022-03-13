<?php
require('../b_controllers/b_header.php');
?>


<html>
<body>
<title> Feedback </title>

<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Germents Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_Home.php"> Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_order_product.php"> Oder Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_complain.php"> Complain</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_feedback.php"> Feedback</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_req_product.php"> Request for Product</a></p></center></td>
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
           <a href ="../b_views/b_Shirt.php">  <img src="../b_assets/shirt.png" ></a>
        </td>

        <td>
          <center><h1>Shirt</h1></center> 
           <br>
           <a href ="../b_views/b_Shirt.php">  <img src="../b_assets/shirts.jpeg"></a>
        </td>

        <td>
          <center><h1>Pant</h1></center> 
           <br>
           <a href ="../b_views/b_order_product.php">   <img src="../b_assets/pants.jpeg"></a>
        </td>
    </tr>

 


</table>
</center>
</body>
</html> 


