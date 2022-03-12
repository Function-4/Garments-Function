<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>View Sellers complain</title>
</head>
<body>
        <table border="1">
			<tr>
                <td><center><b>Sellers Complain</b></center></td>
            </tr>

			<?php 
				$file = fopen('../../Seller/s_models/s_complain.txt', 'r');
				
				while (!feof($file)) 
                {
					$user = fgets($file);
					if($user == null)
                    {
						break;
					}
			?>

			<tr>
				<td><pre><?=$user?></pre></td>
			</tr>

			<?php
				}
			?>
		</table>
		</fieldset>
	</form>
</body>
</html>
