<html>
    <body>
    <title> Home Page </title>
    <table border = "2" width=100%>
        <tr>
            <td><h1 style=font-size:50px >Welcome to Germents Function,</h1></td>
        </tr>
    </table>
    <center><p style="font-size: 30px;"><b>Sign Up</b></p></center>

    <form method="POST" action="../b_controllers/bRegCheck.php">
        <center>
        <table>

        <center><p style="font-size: 30px;">First Name</p> <input type="text" name="1name" value="" /></center>
            

        <center><p style="font-size: 30px;">User Name </p> <input type="text" name="username" value="" /></center>


        <center><p style="font-size: 30px;">Password</p> <input type="password" name="password" value="" /></center>


        <center><p style="font-size: 30px;"> Email</p> <input type="email" name="email" value="" /></center>


        <center><p style="font-size: 30px;">Phone no.</p> <input type="number" name="contact" value="" /></center>

        </table> 
    </center>
    <br><br>
    <br>
      <center>  <input type="submit" name="bRegSubmit" value="Submit" style="height:50px; width:100px"> </center>
</form>
</body>
</html>          