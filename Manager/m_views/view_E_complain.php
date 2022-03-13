<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>View Employee's Complain</title>
    </head>
    <body>
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
</html>