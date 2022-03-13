<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>View Employee's Complain</title>
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
                    <form method="POST" action="view_W_complain.php">
            		<input type="submit" name="" value="View Worker's Complain" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="view_S_complain.php">
            		<input type="submit" name="" value="View Seller's Complain" style="height:150px; width:300px">
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