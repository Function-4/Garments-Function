<?php
require('../controllers/header.php');
$error = "";
if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "<span>&#9888;</span>  Invalid Registration";
		}
        if($_GET['msg'] == 'ok'){
			$error = "<span>&#10003;</span>   Registration Done Sucessfully";
		}
	}
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
    <head>
	    <title>Add Employee</title>
    </head>
    <header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header><br><br><br><br><br><br>
    <body>
        <center>
        <table>
            <tr id="r">
                <br><br>
                    <td><input type="button" name="" value="Add Worker" onclick="w_reg()"></td>
                <td><br><br>
                    <td><input type="button" name="" value="Add Seller" onclick="s_reg()"></td>
                </td>
            </tr>
        </table>
        <h1 id="view"></h1>
        <h1><?=$error?></h1>
        </center>
        
    </body><br><br>
    <element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>