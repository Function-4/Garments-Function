<?php
require('../m_controllers/m_header.php');
?>
<html>
    <head>
	    <title>Provide Salary</title>
    </head>
    <table border = "2" width=100%>  
        <tr>
                <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
                <td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><p style=font-size:30px><a href="m_Home.php">Profile</a></center></td>
		<td><center><p style=font-size:30px><a href="../m_controllers/m_logout.php">Logout</a></center></td>
        </tr>
        </table>
        </body><br>
    <body>
        <table>
            <tr>
                
                    <form method="POST" action="../m_controllers/salaryCal.php">
                    <td>Provide the Ammount of Salary <input type="number" name="wSalaryAmmount" value="" style="height:100px; width:150px"></td>
                    <td><input type="submit" name="wSalary" value="Provide Salary to Worker" style="height:150px; width:300px"></td>
        			</form>
               
            </tr>
            <tr>
                
                    <form method="POST" action="../m_controllers/salaryCal.php">
                    <td>Provide the Ammount of Salary <input type="number" name="sSalaryAmmount" value="" style="height:100px; width:150px"></td>
            		<td><input type="submit" name="sSalary" value="Provide Salary to Seller" style="height:150px; width:300px"></td>
        			</form>
                
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