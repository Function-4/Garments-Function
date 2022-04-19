<?php
$error = "";
if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "<span>&#9888;</span>  Invalid ";
		}
        if($_GET['msg'] == 'ok'){
			$error = "<span>&#10003;</span>   File Uploaded";
		}
	}
?>
<script type="text/javascript" src="../assets/fv.js"></script>
<html>
<link rel="stylesheet" href="../CSS/test.css">
<head>
<title> Manager </title>
</head>

<header id="header">
	<nav class="links" style="--items: 3;">
	<a href="../index.php"><h1 style=font-size:40px>Garments Function</h1></a>
	<a href="m_Home.php">Profile</a>
	<a href="../controllers/logout.php?id=m">Logout</a>
	<span class="line"></span>
	</nav>
	</header>

<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
    <h1>Upload File</h1><br>
	<form action="../controllers/fileCheck.php" method="post" enctype="multipart/form-data">    
    <center><input type="file" name="pdf" required></center>
    <br><br>
    <center> <input type="submit" name="upload" value="Submit" style="height:50px; width:120px" > </center>
    </form>
    <h1><?=$error?></h1>
	</center>
</body>
<element id= "footer"><a><ul> &copy; 2022 Function,inc.</ul></a></element>
<html>
</html>