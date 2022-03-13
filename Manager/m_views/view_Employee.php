<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>View Employee</title>
    </head>
    <body>
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
</html>