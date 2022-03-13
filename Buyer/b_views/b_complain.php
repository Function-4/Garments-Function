<?php 
    require('../b_controllers/b_header.php');
?>

<html>
<body>
<title> Complain</title>
<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Germents Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="#"> Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Oder Product</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Complain</a> </p></center></td>
        <td><center><p style=font-size:30px><a href="#"> Request for Product</a></p></center></td>
        <td><center><p style=font-size:30px><a href="../b_controllers/b_logout.php">Logout</a></center></td>
    </tr>
</table>

<form action="../b_controllers/b_complainCheck.php" method="post">
    <center>
<label><p style=font-size:60px> Complain</p> <br> <textarea cols="60" row="50" name="mes"></textarea></label><br>
    </center>
    <br><br>
    <center> <input type="submit" name="bsub" value="Submit" style="height:50px; width:100px"> </center>

</form>

</body>
</html>