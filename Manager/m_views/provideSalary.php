<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>Provide Salary</title>
    </head>
    <body>
        <table>
            <tr>
                
                    <form method="POST" action="../m_controllers/salaryCal.php">
                    <td>Provide the Ammount of Salary <input type="number" name="wSalaryAmmount" value="" style="height:100px; width:150px"></td>
                    <td><input type="submit" name="wSalary" value="Provide Salary to Worker" style="height:150px; width:300px"></td>
        			</form>
               
            </tr>
            <tr>
                <td>
                    <form method="POST" action="../m_controllers/salaryCal.php">
            		<input type="submit" name="sSalary" value="Provide Salary to Seller" style="height:150px; width:300px">
        			</form>
                </td>
            </tr>
        </table>
    </body>
</html>