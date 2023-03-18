<?php

function rollDice() {
    return rand(1, 6);
}

$result = rollDice();

echo 'result is ' . $result;
?>
