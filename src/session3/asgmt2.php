<?php
$filename = 'licznik.txt';

if (!file_exists($filename)) {
    $file = fopen($filename, 'w');
    fwrite($file, '1');
    $visits = 1;
    fclose($file);
} else {
    $file = fopen($filename, 'r+');
    $visits = intval(fgets($file)) + 1;

    rewind($file);
    fwrite($file, $visits);

    fclose($file);
}

echo 'Number of visits ' . $visits;
?>
