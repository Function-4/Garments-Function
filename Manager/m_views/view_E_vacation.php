<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>View Employee's Application</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="POST" action="view_W_vacation.php">
            		<input type="submit" name="" value="View Worker's Application" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="view_S_vacation.php">
            		<input type="submit" name="" value="View Seller's Application" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body>
</html>