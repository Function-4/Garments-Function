<html>

<body>
    <title> Buyer Registration </title>


    <p3> 
    <center>Welcome to Buyer Registration  Page </center>
    </p3>


    <form method="POST" action="../controllers/regCheck.php">
        <center>
            <table>
            <tr>
                <td>
                <center>
                    <p style="font-size: 30px;">First Name</p> <input type="text" name="1name" value="" />
                </center>
                </td>

                <td>
                <center>
                    <p style="font-size: 30px;">Last Name</p> <input type="text" name="2name" value="" />
                </center>
                </td>

            </tr>


            <tr>
            <td>
                <center>
                    <p style="font-size: 30px;">User Name </p> <input type="text" name="username" value="" />
                </center>
            </td>

                <td>
                        <center>
                            <p style="font-size: 30px;">Password</p> <input type="password" name="password" value="" />
                        </center>
                </td>
            </tr>


            <tr>
                    <td>
                        <center>
                            <p style="font-size: 30px;"> Email</p> <input type="email" name="email" value="" />
                        </center>
                    </td>
                    <td>
                        <center>
                            <p style="font-size: 30px;">Phone no.</p> <input type="number" name="contact" value="" />
                        </center>
                    </td>
            </tr>
            </table>
        </center>
        <br><br>
        <br>
        <center> <input type="submit" name="bRegSubmit" value="Submit" style="height:50px; width:100px"> </center>
    </form>
</body>

</html>