<?php
require('../controllers/header.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
    <head>
	    <title>Delete Employee</title>
    </head>
    <header id="header">
	<nav class="links" style="--items: 4;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="../index.php">Home</a>
    <a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <body>
    <center>
        <table>
            <tr id="r">
                <br><br>
                   <!-- <form method="POST" action="w_reg.php">
            		<input type="submit" name="rWorker" value="Add Worker">
        			</form> -->
                
                    <td><input type="button" name="" value="Delete Worker" onclick="del_w()"></td>
                
                
                <td><br><br>
                    <!-- <form method="POST" action="s_reg.php">
            		<input type="submit" name="rSeller" value="Add Seller">
        			</form> -->

                    <td><input type="button" name="" value="Delete Seller" onclick="del_s()"></td>
                </td>
            
                
            </tr>
        </table>
        <h1 id="view"></h1>
        </center>
       
    </body>
    <element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>