<html>
    <body>
    <title> Buyer Homepage </title>
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
<center><p><h1><u>Oder of the product</u></h1></p>  </center>
<center>
<table width="40%">
        <tr>
        <td>   
           <center><p style=font-size:30px>Username</p>
            <input type="text" name="username" value=""></center> 
        </td>

        <td>   
        <center><p style=font-size:30px>Item Name</p>
            <input type="text" name="Itemname" value=""></center> 
        </td>
        </tr>

        <tr>
    <td>
        <center>
            <p style=font-size:30px>Quantity</p>
            <input type="text" name="quantity" value="">
        </center>
    </td>

    <td>
        <center>
            <p style=font-size:30px>Color</p>
            <input type="text" name="color" value="">
        </center>
    </td>
        </tr>

        <tr>
    <td>
        <center>
        <p style=font-size:30px>Size</p>
        <input type="text" name="size" value="">
        </center>
    </td>
        </tr>
        
    </table>
</center>    
    <br><br><br>
        <center>
        <input type="submit" name="bsubmit" value="Submit" style="height:50px; width:100px">
        </center>


    </body>
</html>