<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>View complain</title>
</head>
<body>
        <table border="1">
			<tr>
                <td><center><b>Workers Complain</b></center></td>
            </tr>

			<?php 
				$file = fopen('../../Worker/w_models/w_complain.txt', 'r');
				
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
