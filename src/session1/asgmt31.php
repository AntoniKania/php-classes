<?php
$array = array();

for ($i = 0; $i < 50; $i++) {
  $array[] = rand(0, 100);
}

$maxValue = 0;

for ($i = 1; $i < count($array); $i++) {
  if ($array[$i] > $maxValue) {
      $maxValue = $array[$i];
  }
}

echo "Max from for loop: " . $maxValue . " ";

$i = 0;
$maxValue = 0;

while($i < count($array)) {
  if ($array[$i] > $maxValue) {
    $maxValue = $array[$i];
  }
  $i++;
}

echo "Max from while loop: " . $maxValue . " ";

$i = 0;
$maxValue = 0;

do {
  if ($array[$i] > $maxValue) {
    $maxValue = $array[$i];
  }
  $i++;
} while ($i < count($array));

echo "Max from do while loop: " . $maxValue . " ";

$maxValue = 0;

foreach ($array as $value) {
  if ($value > $maxValue) {
    $maxValue = $value;
  }
}

echo "Max from do while loop: " . $maxValue;

?>