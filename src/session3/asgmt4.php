<?php
$allowed_ips_file = 'allowed_ips.txt';
$allowed_ips = file($allowed_ips_file, FILE_IGNORE_NEW_LINES);

if (in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
  include('internal_page.php');
} else {
  include('regular_page.php');
  echo " Your ip address:" . $_SERVER['REMOTE_ADDR'];
}
?>
