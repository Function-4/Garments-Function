<?php
session_start();
?>
<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">



<br>
<br>
<center>
<label><p style=font-size:60px> Complain</p> <br> <textarea cols="60" row="50" name="mes"></textarea></label><br>
    </center>
    <br><br>

<form action="../controllers/b_compcheck.php" method="post" enctype="multipart/form-data">
   
    
    <center><input type="file" id="myFile" name="pdf"></center>
    <center> <input type="submit" name="b_submit" value="Submit" style="height:50px; width:100px"> </center>
    
</form>


    </body>
</html>