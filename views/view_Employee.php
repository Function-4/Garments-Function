<?php
require('../controllers/header.php');
?>
<html>
<script type="text/javascript" src="../assets/fv.js"></script>
<link rel="stylesheet" href="../CSS/test.css">
    <head>
	    <title>View Employee</title>
    </head>
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
	</header><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <body>
    <center>
        <table>
            <tr id="r">
               <!-- <td>
                     <form method="POST" action="view_worker.php">
            		<input type="submit" name="vWorker" value="View Worker" onclick="ajax()">
        			</form> 
                </td> -->
                <td><input type="button" name="" value="View Worker" onclick="view_w()"></td>
                <td>  </td>
                <td><input type="button" name="" value="View Seller" onclick="view_s()"></td>
            </tr>
            <tr>
            
               <!-- <td><br>
                    <form method="POST" action="view_seller.php">
            		<input type="submit" name="vSeller" value="View Seller">
        			</form> 
                </td> -->
            </tr>
        </table>
    </center>
    <h1 id="view"></h1>
    </body>
    <element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
</html>