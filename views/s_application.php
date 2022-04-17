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

<br><br><br>
<center><p5><b>Submit Your Paper Application</b></p5></center>
<br><br><br>
<form action="../controllers/appCheck.php" method="post">    
    <center><input type="file" id="s_application" name="filename"></center>
    <br><br><br>
    <center> <input type="submit" name="s_app" value="Submit" style="height:50px; width:100px"> </center>
</form>
</body>
</html>