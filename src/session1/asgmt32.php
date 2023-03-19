<?php
function rollDice() {
    return rand(1, 6);
}

$resultArray = array();

$numberOfRolls = 7;

for ($i = 0; $i < $numberOfRolls; $i++) {
  $resultArray[] = rollDice();
}

print_r($resultArray);
?>