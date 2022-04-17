<?php
require('../controllers/header.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
    <head>
	    <title>Provide Salary</title>
    </head>
    <header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
    <body>
        <table>
            <tr>
                
                    <form method="POST" action="../controllers/salary.php" onsubmit="return fv_salary()">
                    <td>Provide the Ammount of Salary <input id="wsal" type="number" name="wSalaryAmmount" value="" style="height:70px; width:150px"></td>
                    <td><input type="submit" name="wSalary" value="Provide Salary to Worker" style="height:70px; width:260px"></td>
        			</form>
               
            </tr>
            <tr><td id="wsalError"></td></tr>
            <tr>
                
                    <form method="POST" action="../controllers/salary.php" onsubmit="return fv_salary_S()">
                    <td>Provide the Ammount of Salary <input id="ssal" type="number" name="sSalaryAmmount" value="" style="height:70px; width:150px"></td>
            		<td><input type="submit" name="sSalary" value="Provide Salary to Seller" style="height:70px; width:260px"></td>
        			</form>
                
            </tr>
            <tr><td id="ssalError"></td></tr>
        </table>
    </body>
    </center>
    <element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>