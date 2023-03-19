<?php
function returnNumberFromArray($index) {
  $array = array();

  for ($i = 0; $i <= $index; $i++) {
    $array[] = rand(0, 100);
  }

  return $array[$index];
}

$userInput = 4;

echo returnNumberFromArray($userInput);

?>