<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>View Employee</title>
    </head>
    <table border = "2" width=100%>  
        <tr>
                <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../m_controllers/m_logout.php">Logout</a></center></td>
        </tr>
        </table>
    <body><br>
        <table>
            <tr>
                <td>
                    <form method="POST" action="view_worker.php">
            		<input type="submit" name="vWorker" value="View Worker" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="view_seller.php">
            		<input type="submit" name="vSeller" value="View Seller" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body>
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