<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>Delete Employee</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="POST" action="deleteWorker.php">
            		<input type="submit" name="dWorker" value="Delete worker" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="deleteSeller.php">
            		<input type="submit" name="dSeller" value="Delete Seller" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body>
</html>