<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>Seller's Vacation Application</title>
</head>
<body>
        <table border="1">
			<tr>
                <td><center><b>Seller's Vacation Application</b></center></td>
            </tr>

			<?php 
				$file = fopen('../../Seller/s_models/s_application.txt', 'r');
				
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
