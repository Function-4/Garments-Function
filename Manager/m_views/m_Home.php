<?php
require('../m_controllers/m_header.php');
?>
<html>

<head>
	<title>Public Home</title>
</head>
<style>
	h1,
	h4 {
		display: inline-block;
	}

	p.ex1 {
		padding-left: 380%;
	}
</style>

<body>
	<table>
		<table border="1" width="100%">
			<tr>
				<td>
					<pre><h1 style=font-size:25px> X Company</h1><h4><p class="ex1"><a href="publicHome.php">Public Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></pre>
					</p>
					</h4>
				</td>
			</tr>
			<tr height="310px">
				<td>

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

					<a href="view_W_complain.php">View Complain</a>

					<a href="../m_controllers/m_logout.php">Logout</a>

				</td>
			</tr>
			
			<tr>
				<td>
					<h3>
						<center>Copyright &copy; 2017</center>
					</h3>
				</td>
			</tr>
		</table>
</body>

</html>