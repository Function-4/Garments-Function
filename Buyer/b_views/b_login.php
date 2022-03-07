<?php
//echo "buyer";
?>
<html>
    <body>
    <title> Home Page </title>
    <table border = "2" width=100%>
        <tr>
            <td><h1 style=font-size:50px >Welcome to Germents Function ,</h1></td>
        </tr>
    </table>
    <center><p style="font-size: 50px;"><b>Log in as Buyer</b></p></center>


    <form method="POST" action="../b_controllers/b_loginCheck.php">
    
        <center><p style="font-size: 30px;">User Name</p> <input type="text" name="username" value="" /></center>
        <center><p style="font-size: 30px;">Password</p> <input type="password" name="password" value="" /></center>
        <br>
        <br>
     
       <center> <input type="submit" name="bLogin" value="Submit" style="height:50px; width:100px"> </center>
        </form>


    </body>
</html>
