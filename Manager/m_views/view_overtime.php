<?php
require('../m_controllers/m_header.php');
?>
<html>
<head>
	<title>View Over Time Requests</title>
</head>
<body>
        <table border="1">
			<tr>
                <td><center><b>Over Time Requests</b></center></td>
            </tr>

			<?php 
				$file = fopen('../../Worker/w_models/overtime.txt', 'r');
				
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

