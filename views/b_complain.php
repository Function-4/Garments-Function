<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
<ul>
  <li><a href="b_home.php">Home</a></li>
  <li><a href="b_product.php">Product</a></li>
  <li><a href="b_order.php">Oder Product</a></li>
  <li><a href="b_complain.php">Complain</a></li>
  <li><a href="b_Feedback.php">Feedback</a></li>
  <li><a href="b_reqforproduct.php">Request for Product</a></li>
  <li><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="b_logout" value="Logout" style="height:60px; width:100px"  >
        			</form>
                </li>
</ul>



<br>
<br>

<form action="../controllers/complaincheck.php" method="post">
    <center>
    <p style="font-size: 30px;">Complain</p> <br>
    <input type="text" name="com" value="" >

    </center>

    <br><br>

    <center> <input type="submit" name="comsubmit" value="Submit" style="height:50px; width:100px"> </center>
    
</form>


    </body>
</html>