<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<body>
    <title> Buyer Registration </title>
    <link rel="stylesheet" href="../CSS/b_login.css">
    <p3> 
    <br>
    
    <center>Welcome to Buyer Registration </center>
    </p3>
    <br>
    <br>
    <form method="POST" action="../controllers/regCheck.php" onsubmit="return reg()">
        <center>
            <table style="width:50%">
            <tr>
                <td>
                    <center>
                        <p style="font-size: 30px;">UserName</p> <input type="text" name="first" value="" />
                    </center>
                    <br><br>
                </td><td id="firstError"></td>
                <td>
                    <center>
                        <p style="font-size: 30px;">Password</p> <input type="text" name="last" value="" />
                    </center>
                    <br><br>
                </td><td id="lastError"></td>
            </tr>
            <hr class="new4">
            <tr>
            <td>
                <center>
                    <p style="font-size: 30px;">First Name</p> <input type="text" name="username" value="" />
                </center>
                <br><br>
            </td><td id="usernameError"></td>
                <td>
                        <center>
                            <p style="font-size: 30px;">Last Name</p> <input type="password" name="password" value="" />
                        </center>
                        <br><br>
                </td></td><td id="passError"></td>
            </tr>
            <tr>
                    <td>
                        <center>
                            <p style="font-size: 30px;"> Email</p> <input type="email" name="email" value="" />
                        </center>
                        <br><br>
                    </td><td id="emailError"></td>
                    <td>
                        <center>
                            <p style="font-size: 30px;">Phone no.</p> <input type="number" name="contact" value="" />
                        </center>
                        <br><br>
                    </td><td id="numberError"></td>
            </tr>
            </table>
        </center>
        <hr class="new4">
        <br><br>
        <br>
        
        <center> <input type="submit" name="bRegSubmit" value="Submit" style="height:50px; width:100px"> </center>
    </form>
    
   <center><a1> <a href = "b_login.php"> Already have a Account ?? </a></a1></center>

   <script>
				function reg(){
			let username = document.getElementById('name').value;
			let pass = document.getElementById('pass').value;
			let first = document.getElementById('first').value;
			let last = document.getElementById('last').value;
			let email = document.getElementById('email').value;
			let number = document.getElementById('number').value;

			if(username == ""){
				alert("Please Provide your Username");
				return false;
			}
			if(pass == ""){
				alert("Please Provide your Password");
				return false;
			}
			if(first == ""){
				alert("Please Provide your First Name");
				return false;
			}
			if(last == ""){
				alert("Please Provide your Last Name");
				return false;
			}
			if(email == ""){
				alert("Please Provide your Email");
				return false;
			}
			if(number == ""){
				alert("Please Provide your Number");
				return false;
			}
			return true;
		}
			</script>

</body>
</html>