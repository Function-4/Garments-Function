<html>
<body>
<title> Home Page </title>
<table border = "2" width=100%>
    <tr>
        <td><center><h1 style=font-size:50px>Germents Function</h1></center></td>
    </tr>
</table>

<style>
    div {
      background-color: gainsboro;
      width: 300px;
      border: 15px black;
      padding: 50px;
      margin: 20px;
      width: 91%;
    }
    </style>
<div > 
  
    <form  method="POST" action="../controllers/loginPath.php">
    <center>
        <p style="font-size: 40px;">Log in as : </p>
        <select name="login">
        <option value="m">Manager</option>
        <option value="w">Worker</option>
        <option value="s">Seller</option>
        <option value="b">Buyer</option>
    </center>
    </select>
    <br>
    <br>
    <br>
    
    <input type="submit" name="loginSubmit" value="Login">
</form>

</div>


    </center>
</div>
</body>
</html>