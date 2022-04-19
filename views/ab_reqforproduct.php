<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">

<br>
<br>

<center><p4>Request for product</p4></center>
<br><br><br>
<center>
<form method="POST" action="../controllers/productcheck.php">
        
    
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
<center><input type="submit" name="bLogin" value="Submit" style="height:50px; width:100px"> </center>
</form>
           

                    
</center>


    </body>
</html>