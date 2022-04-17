<?php
session_start();
?>
<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
    <link rel="stylesheet" href="../CSS/s_css.css">
    <script type="text/javascript" src="../assets/fv.js"></script>
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


<center>
<table>
                    <br>
                    <tr id="r">
                        <td width="400px">
                        <button class="button button1" onclick="s_application()">Application</button>
                        </td>
                        <td>
                        <button class="button button1" onclick="s_complain()">Complain</button>
                        </td>
                    </tr>
                        <tr>
                            <td height="90px"></td>
                        </tr>
                        
                    <tr>
                        <td>
                        <button class="button button1"onclick="s_Feedback()">Feedback</button>
                        </td>

                        <td>
                        <button class="button button1"onclick="s_viewreq()" >View product Request</button>
                        </td>
                    </tr>
                    
                </table>  
</center>


<p id="view"></p>
    </body>
</html>