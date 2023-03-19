<?php
function displayMultiplicationTable($sideLength) {
    for ($i = 1; $i <= $sideLength; $i++) {
        for ($j = 1; $j <= $sideLength; $j++) {
            $result = $i * $j;
            echo $result . " ";
        }
        echo"<br>";
        echo "\n";
    }
}

$userInput = 5;

displayMultiplicationTable($userInput);
?>