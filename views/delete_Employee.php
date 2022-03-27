<?php
require('../controllers/header.php');
?>
<html>
    <head>
	    <title>Delete Employee</title>
    </head>
    <table border = "2" width=100%>  
        <tr>
                <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="m_logout" value="Logout" style="height:50px; width:70px">
        			</form></center></td>
        </tr>
    </table>
    <body><br><br>
        <table>
            <tr>
                <td>
                    <form method="POST" action="delete_W.php">
            		<input type="submit" name="dWorker" value="Delete worker" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td><br>
                    <form method="POST" action="delete_S.php">
            		<input type="submit" name="dSeller" value="Delete Seller" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body><br>
            <table border="1"  width="100%">
			<tr>
				<td>
					<h4>
						<center> &copy; 2022 Function,inc.</center>
					</h4>
				</td>
			</tr>
			</table>
</html>