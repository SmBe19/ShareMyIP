<?php
require('config.php');
if (isset($_POST['phrase']) && $_POST['phrase'] === $config['phrase']) {
  $new_ip = $_SERVER['REMOTE_ADDR'];
  file_put_contents($config["ipfile"], $new_ip);
  echo "ok\n";
} else {
  echo "fail\n";
}
