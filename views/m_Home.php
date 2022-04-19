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

					<form method="POST" action="provide_salary.php">
            		<input type="submit" name="" value="Provide Salary">
        			</form>

					<form method="POST" action="provide_bonus.php">
            		<input type="submit" name="" value="Provide Bonus to Worker">
        			</form>
				</td>


				<td><br><br><br><br><br>
					<form method="POST" action="m_reg.php">
            		<input type="submit" name="m" value="Add New Manager">
        			</form>

					<form method="POST" action="m_upload.php">
            		<input type="submit" name="" value="Upload Document">
        			</form>

					<form method="POST" action="view_doc.php">
            		<input type="submit" name="" value="View Document">
        			</form>

					<form method="POST" action="view_overtime.php">
            		<input type="submit" name="" value="Worker's Overtime Request">
        			</form>


					<form method="POST" action="m_product.php">
            		<input type="submit" name="" value="View Company's Product">
        			</form>
				</td>


			</tr>
			</table><br><br>
			<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
		
</body>

</html>