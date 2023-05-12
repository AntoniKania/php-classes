<?php

$visits = isset($_COOKIE['visits']) ? $_COOKIE['visits'] : 0;
$givenNumber = 5;

if ($visits >= $givenNumber) {
  echo "Congrats, this is hidden site that is visible after $givenNumber number of visits";
} else {
  $visits++;
  setcookie('visits', $visits, time() + (60 * 60));
  echo "Visit number $visits.";
}

?>