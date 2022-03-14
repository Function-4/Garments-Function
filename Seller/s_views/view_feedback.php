<?php
require('../s_controllers/s_header.php');
?>
<html>
<head>
	<title>View Buyer's Feedback</title>
</head>
<body>
        <table border="1">
			<tr>
                <td><center><b>Buyer's Feedback</b></center></td>
            </tr>

			<?php 
				$file = fopen('../../Buyer/b_models/b_feedback.txt', 'r');
				
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
