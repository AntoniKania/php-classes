<?php

if(isset($_COOKIE['visits2'])){
  $visits = $_COOKIE['visits2'];
} else {
  $visits = 0;
}

if(!isset($_COOKIE['flag'])) {
  setcookie('visits2', ++$visits, time() + (60 * 60));
  setcookie('flag', true);
}

echo "Number of visits: " . $visits;
?>