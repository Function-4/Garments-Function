<?php
require('../controllers/header.php');
?>
<html>
<link rel="stylesheet" href="../CSS/m_home.css">
<head>
	<title>Manager Home</title>
</head>

<body>
<title> Feedback </title>

	<header id="header">
	<nav class="links" style="--items: 3;">
	<h1 style=font-size:50px><center>Garments Function</center></h1>
	<a href="../index.php">Home</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header>

<table>
		<table  width="100%">
			<tr>
				<td><br><br><br><br><br>
					<form method="POST" action="view_Employee.php">
            		<input type="submit" name="" value="View Employee" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="add_Employee.php">
            		<input type="submit" name="" value="Add Employee" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="delete_Employee.php">
            		<input type="submit" name="" value="Delete Employee" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="provideSalary.php">
            		<input type="submit" name="" value="Provide Salary" style="height:100px; width:200px">
        			</form>

					<form method="POST" action="provideBonus.php">
            		<input type="submit" name="" value="Provide Bonus to Worker" style="height:100px; width:200px">
        			</form>
				</td>


				<td><br><br><br><br><br>
					<form method="POST" action="m_reg.php">
            		<input type="submit" name="m" value="Add New Manager" style="height:100px; width:200px">
        			</form>

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