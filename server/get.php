<?php
require('config.php');
$ip = file_get_contents($config["ipfile"]);
echo $ip."\n";
