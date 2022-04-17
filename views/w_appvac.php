<?php
session_start();
?>
<html>
    <title>

    </title>
    <link rel="stylesheet" href="../CSS/w_css.css">
    <link rel="stylesheet" href="../CSS/w2_css.css">
    <body>
     
    <ul>
  <li><a href="w_home.php"><center>Home</center></a></li>
  <li><a href="w_appvac.php"><center>Apply For Vacation</center></a></li>
  <li><a href="w_complain.php"><center>Apply For Complain</center></a></li>
  <li><a href="w_reqover.php"><center>Request For Over-Time</center></a></li>
  <li><a href="w_apphel.php"><center>Apply For Health Check-up</center></a></li>
    <li><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="b_logout" value="Logout" style="padding : 24px; margin:0px">
        			</form>
</ul>

   <center>
      <br><br><br><br><br>
      
      <form action="../controllers/appCheck.php" method="post" enctype="multipart/form-data">
    <center>
        <label> 
        <p1>Apply For Vacation</p1> 
        <br><br><br><textarea cols="60" row="50" name="mes"></textarea></label><br>
    </center>

    <br><br><br>

    <center>
    
        <input type="file" name="pdf">
    </center>
    
    <br><br>

    <center> 
        <input type="submit" name="w_app" value="Submit" style="height:50px; width:100px">
       
     </center>

    
</form>
           
     
   </center>
  

               
             


    </body>
</html>