<?php 
	session_start();
    if(isset($_REQUEST['rWorker']))
    {
        $id = $_REQUEST['id'];
            $file = fopen('../m_models/worker.txt', 'r');
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

			$file = fopen('../m_models/worker.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../m_views/deleteWorker.php');
    }
    else
    {
        echo 'Invalid Request';
    }
		
?>