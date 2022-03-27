<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>Delete Employee</title>
    </head>
    <table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
        <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../m_controllers/m_logout.php">Logout</a></center></td>
    </tr>
    </table>
    <body><br><br>
        <table>
            <tr>
                <td>
                    <form method="POST" action="deleteWorker.php">
            		<input type="submit" name="dWorker" value="Delete worker" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td><br>
                    <form method="POST" action="deleteSeller.php">
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