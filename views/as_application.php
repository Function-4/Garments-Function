<?php
session_start();
?>
<html>
    <body>
    <title> Product </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
    <link rel="stylesheet" href="../CSS/s_css.css">

<br><br><br>
<center><p5><b>Submit Your Paper For Application</b></p5></center>
<br><br><br>
<form action="../controllers/appCheck.php" method="post" enctype="multipart/form-data">    
    <center><input type="file" id="s_application" name="pdf"></center>
    <br><br><br>
    <center> <input type="submit" name="s_app" value="Submit" style="height:50px; width:100px" > </center>
</form>



    </body>
</html>