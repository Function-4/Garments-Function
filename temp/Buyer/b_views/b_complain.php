<?php 
    require('../b_controllers/b_header.php');
?>

<html>
<body>
<title> Complain</title>
<table border = "2" width=100%>  
    <tr>
    <td><center><p style=font-size:30px><a href="../b_views/b_Home.php"> Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_order_product.php"> Oder Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_complain.php"> Complain</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_feedback.php"> Feedback</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="../b_views/b_req_product.php"> Request for Product</a></p></center></td>
		<td><center><p style=font-size:30px><a href="../b_controllers/b_logout.php">Logout</a></center></td>
    </tr>
</table>

<form action="../b_controllers/b_complainCheck.php" method="post">
    <center>
<label><p style=font-size:60px> Complain</p> <br> <textarea cols="60" row="50" name="mes"></textarea></label><br>
    </center>
    <br><br>
    <center> <input type="submit" name="bsub" value="Submit" style="height:50px; width:100px"> </center>

</form>

</body>
</html>