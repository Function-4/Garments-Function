<html>

<body>
    <title> Buyer Registration </title>

    <link rel="stylesheet" href="../CSS/b_login.css">
    <p3> 
    <br>
    
    <center>Welcome to Buyer Registration </center>
    </p3>

    <br>
    <br>


    <form method="POST" action="../controllers/regCheck.php">
        <center>
            <table style="width:50%">

            <tr>
                <td>
                    <center>
                        <p style="font-size: 30px;">First Name</p> <input type="text" name="first" value="" />
                    </center>
                    <br><br>
                </td>

                <td>
                    <center>
                        <p style="font-size: 30px;">Last Name</p> <input type="text" name="last" value="" />
                    </center>
                    <br><br>
                </td>

            </tr>

            <hr class="new4">
            <tr>
            <td>
                <center>
                    <p style="font-size: 30px;">User Name </p> <input type="text" name="username" value="" />
                </center>
                <br><br>
            </td>

                <td>
                        <center>
                            <p style="font-size: 30px;">Password</p> <input type="password" name="password" value="" />
                        </center>
                        <br><br>
                </td>
            </tr>


            <tr>
                    <td>
                        <center>
                            <p style="font-size: 30px;"> Email</p> <input type="email" name="email" value="" />
                        </center>
                        <br><br>
                    </td>
                    <td>
                        <center>
                            <p style="font-size: 30px;">Phone no.</p> <input type="number" name="contact" value="" />
                        </center>
                        <br><br>
                    </td>
            </tr>
            </table>
        </center>
        <hr class="new4">
        <br><br>
        <br>
        
        <center> <input type="submit" name="bRegSubmit" value="Submit" style="height:50px; width:100px"> </center>
    </form>

    

   <center><a1> <a href = "b_login.php"> Already have a Account ?? </a></a1></center>
</body>

</html>