<?php 
	session_start();
    if(isset($_REQUEST['rSeller']))
    {
        $id = $_REQUEST['id'];
            $file = fopen('../m_models/seller.txt', 'r');
			$updatedContent = "";

			while(!feof($file))
            {
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id)
                {
					$updatedContent .= $line;
				}				
			}

			$file = fopen('../m_models/seller.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../m_views/deleteSeller.php');
    }
    else
    {
        echo 'Invalid Request';
    }
		
?>