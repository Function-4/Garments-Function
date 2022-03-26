<?php
require('../controllers/m_header.php');
?>
<html>

<head>
	<title>Manager Home</title>
</head>

<body>
<title> Feedback </title>

<table border = "2" width=100%>  
    <tr>
        <td><h1 style=font-size:50px><center>Garments Function</center></h1></td>
		<td><center><p style=font-size:30px><a href="../../index.php">Home</a></center></td>
		<td><center><form method="POST" action="../controllers/logout.php">
            		<input type="submit" name="m_logout" value="Logout" style="height:50px; width:70px">
        			</form></center></td>
    </tr>
</table>
<table>
		<table  width="100%">
			<tr>
				<td><br>
					<form method="POST" action="view_Employee.php">
            		<input type="submit" name="" value="View Employee" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="add_Employee.php">
            		<input type="submit" name="" value="Add Employee" style="height:100px; width:200px">
        			</form>

					<!--
					<a href="m_Wreg.php">Add Worker</a>
					<a href="m_Sreg.php">Add Seller</a>
					<br><br>
					
					
					<form method="POST" action="view_worker.php">
            		<input type="submit" name="vWorker" value="View worker" style="height:150px; width:300px">
        			</form>
        			<form method="POST" action="view_seller.php">
            		<input type="submit" name="vSeller" value="View seller" style="height:150px; width:300px">
        			</form>
					<a href="deleteUser.php">Delete user</a>
					<a href="provideSalary.php">Salary</a>
					<a href="provideBonus.php">Bonus</a>
					<a href="view_W_complain.php">View W Complain</a>

					<a href="view_S_complain.php">View S Complain</a>
					<a href="view_W_vacation.php">View W Application</a><br>

					<a href="view_S_vacation.php">View S Application</a><br>
					-->
					<form method="POST" action="deleteUser.php">
            		<input type="submit" name="" value="Delete Employee" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="provideSalary.php">
            		<input type="submit" name="" value="Provide Salary" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="provideBonus.php">
            		<input type="submit" name="" value="Provide Bonus to Worker" style="height:100px; width:200px">
        			</form>
				</td>


				<td>
					<form method="POST" action="view_E_complain.php">
            		<input type="submit" name="" value="View Employee's Complain" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="view_overtime.php">
            		<input type="submit" name="" value="Worker's Overtime Request" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="view_E_vacation.php">
            		<input type="submit" name="" value="View Employee's Application" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="viewProduct.php">
            		<input type="submit" name="" value="View Company's Product" style="height:100px; width:200px">
        			</form>
				</td>


			</tr>
			</table>
			<table border="1"  width="100%">
			<tr>
				<td>
					<h4>
						<center> &copy; 2022 Function,inc.</center>
					</h4>
				</td>
			</tr>
			</table>
		
</body>

</html>