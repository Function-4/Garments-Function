<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>Add Employee</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="POST" action="m_Wreg.php">
            		<input type="submit" name="rWorker" value="Add Worker" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="POST" action="m_Sreg.php">
            		<input type="submit" name="rSeller" value="Add Seller" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body>
</html>