<html>
    <body>
    <title> Buyer Homepage </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
    <link rel="stylesheet" href="../CSS/buyer2.css">
    <script type="text/javascript" src="../assets/fv.js"></script>


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

<br><br><br><br><br><br><br><br>


<center>
                <div>

                <table>
                    <br>
                    <tr id="r">
                        <td width="400px">
                        <button class="button button1" onclick="b_product()">Product</button>
                        </td>
                        <td>
                        <button class="button button1" onclick="b_order()">Oder Product</button>
                        </td>
                    </tr>
                        <tr>
                            <td height="90px"></td>
                        </tr>
                        
                    <tr>
                        <td>
                        <button class="button button1"onclick="b_complain()">Complain</button>
                        </td>

                        <td>
                        <button class="button button1"onclick="b_feedback()" >Feedback</button>
                        </td>
                    </tr>
                </table>  

                <br><br>
                         <center><button class="button button1" onclick="b_reqproduct()">Request for product</button></center>
</div>
                </center>
               
                <p id="view"></p>
    </body>
</html>