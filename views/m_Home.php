<?php
require('../controllers/header.php');
?>
<html>
<link rel="stylesheet" href="../CSS/test.css">
<head>
	<title>Manager Home</title>
</head>

<body>
<title> Feedback </title>

	<header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
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
            		<input type="submit" name="" value="View Employee">
        			</form>

					<form method="POST" action="add_Employee.php">
            		<input type="submit" name="" value="Add Employee">
        			</form>

					<form method="POST" action="delete_Employee.php">
            		<input type="submit" name="" value="Delete Employee">
        			</form>

					<form method="POST" action="provideSalary.php">
            		<input type="submit" name="" value="Provide Salary">
        			</form>

					<form method="POST" action="provideBonus.php">
            		<input type="submit" name="" value="Provide Bonus to Worker">
        			</form>
				</td>


				<td><br><br><br><br><br>
					<form method="POST" action="m_reg.php">
            		<input type="submit" name="m" value="Add New Manager">
        			</form>

					<form method="POST" action="view_E_complain.php">
            		<input type="submit" name="" value="View Employee's Complain">
        			</form>

					<form method="POST" action="view_overtime.php">
            		<input type="submit" name="" value="Worker's Overtime Request">
        			</form>

					<form method="POST" action="view_E_vacation.php">
            		<input type="submit" name="" value="View Employee's Application">
        			</form>

					<form method="POST" action="viewProduct.php">
            		<input type="submit" name="" value="View Company's Product">
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