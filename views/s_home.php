<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
    <link rel="stylesheet" href="../CSS/s_css.css">
<ul>
  <li><a href="s_home.php">Home</a></li>
  <li><a href="s_application.php">Application</a></li>
  <li><a href="s_complain.php">Complain</a></li>
  <li><a href="s_Feedback.php">Feedback</a></li>
  <li><a href="s_viewreq.php">View Product Request</a></li>
  <li><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="b_logout" value="Logout" style="height:60px; width:100px"  >
        			</form>
                </li>
</ul>

<div2>
<center>
<table>
                    <br>
                    <tr id="r">
                        <td width="400px">
                        <button class="button button1" onclick="b_product()">Application</button>
                        </td>
                        <td>
                        <button class="button button1" onclick="b_order()">Complain</button>
                        </td>
                    </tr>
                        <tr>
                            <td height="90px"></td>
                        </tr>
                        
                    <tr>
                        <td>
                        <button class="button button1"onclick="b_complain()">Feedback</button>
                        </td>

                        <td>
                        <button class="button button1"onclick="b_feedback()" >View product Request</button>
                        </td>
                    </tr>
                </table>  
</center>

</div2>


    </body>
</html>