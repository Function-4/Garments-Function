<?php
require('../controllers/header.php');
?>
<html>
<link rel="stylesheet" href="../CSS/test.css">
    <head>
	    <title>Delete Employee</title>
    </head>
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
            <tr>
                <td>
                    <form method="POST" action="delete_W.php">
            		<input type="submit" name="dWorker" value="Delete worker">
        			</form>
                </td>
            </tr>
            <tr>
                <td><br>
                    <form method="POST" action="delete_S.php">
            		<input type="submit" name="dSeller" value="Delete Seller">
        			</form>
                </td>
            </tr>
        </table>
    </center>
       
    </body>
    <element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>