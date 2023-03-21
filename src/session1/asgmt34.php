<?php
function isPrime($n, &$iterations) {
  if ($n < 2 || ($n > 2 && $n % 2 == 0) || ($n > 3 && $n % 3 == 0)) {
    return false;
  }
  for ($i = 5; $i <= sqrt($n); $i += 2) {
    $iterations++;
    if ($n % $i == 0) {
      return false;
    }
  }
  $iterations++;
 
  return true;
}

$iterations = 0;
$input = 31;

echo "is " . $input . " Prime? ";
echo isPrime($input, $iterations) ? "yes" : "no";
echo "\nnumber of iterations: " . $iterations;
?>