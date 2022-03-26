<html>

<body>
    <title> Home Page </title>
    <table border="2" width=100%>
        <tr>
            <td>
                <center>
                    <h1 style=font-size:50px>Germents Function</h1>
                </center>
            </td>
        </tr>
    </table>

    <h1>
        <center>
            <p style="font-size: 40px;">Welcome</p>
        </center>
    </h1>


    <center>
        <form method="POST" action="views/login.php">
            <input type="submit" name="login" value="Login" style="height:150px; width:300px">
        </form>
        <br>
        <form method="POST" action="Buyer/b_views/b_reg.php">
            <input type="submit" name="bReg" value="Sign up as Buyer" style="height:150px; width:300px">
        </form>
        <?php
        //date_default_timezone_set('Asia/Dhaka');
        //$date = date('d/m/y  h:i a');
        //echo $date;
        ?>
       

    </center>



    
    <table border="2" width=100%>
        <tr rowspan="4">
            <td>
                <p style="font-size: 40px;">Get in Touch</p< /td>
            <td rowspan="2">
                <center>
                    <p style="font-size: 40px;">
                    <pre><p style="font-size: 20px;"><a href="#"><b>Product</b></a></p></pre>
                    <pre><p style="font-size: 20px;"><a href="#"><b>Service</b></a></p></pre>
                    <pre><p style="font-size: 20px;"><a href="#"><b>Contact Us</b></a></p></pre>
                    <pre><p style="font-size: 20px;"><a href="#"><b>About Us</b></a></p></pre>
                    </p>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-size: 40px;"><a href="#">Facebook</a> <a href="#">Twitter</a> <a href="#">Instagram</a></p>
            </td>
        </tr>
    </table>

</body>

</html>