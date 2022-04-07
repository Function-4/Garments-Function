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

<center><p4>Request for product</p4></center>
<br><br><br>
<center>
    <form action=""> 
        
    
    <table>
    <tr>
        <td >
        <p style=font-size:30px>Username</p>
        <input type="text" name="username" value="">
        </td>

        <td>        
        <p style=font-size:30px>Item Name</p>
            <input type="text" name="Itemname" value="">
        </td>
    </tr>


    <tr>
        <td>
        <p style=font-size:30px>Quantity</p>
            <input type="text" name="quantity" value="">
        </td>

        <td>      
        <p style=font-size:30px>Color</p>
            <input type="text" name="color" value="">

        </td>
    </tr>

    <tr>
        <td>
        <p style=font-size:30px>Size</p>
            <input type="text" name="size" value="">
        </td>
    </table>                 
      
            <br><br><br>
<center> <input type="submit" name="bLogin" value="Submit" style="height:50px; width:100px"> </center>
</form>
           

                    
</center>


    </body>
</html>