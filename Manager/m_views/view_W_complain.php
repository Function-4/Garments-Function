<?php
require('../m_controllers/m_header.php');
$url = '../../Worker/w_models/w_complain.txt';
$file = fopen($url, 'r');
echo fread($file , filesize($url));
fclose($file);
?>
