<?php
function calculateRecursiveFibonacci($n) {
  if ($n <= 1) {
    return $n;
  } else {
    return calculateRecursiveFibonacci($n-1) + calculateRecursiveFibonacci($n-2);
  }
}

function calculateNonRecursiveFibonacci($n) {
  if ($n <= 1) {
    return $n;
  } else {
    $fib1 = 0;
    $fib2 = 1;
    for ($i = 2; $i <= $n; $i++) {
      $fib = $fib1 + $fib2;
      $fib1 = $fib2;
      $fib2 = $fib;
    }
    return $fib;
  }
}

$n = readline("Enter a positive integer: ");

$start_time = microtime(true);
$recursiveFibonacciResult = calculateRecursiveFibonacci($n);
$recursiveFibonacciTime = microtime(true) - $start_time;

$start_time = microtime(true);
$nonRecursiveFibonacciResult = calculateNonRecursiveFibonacci($n);
$nonRecursiveFibonacciTime = microtime(true) - $start_time;

echo "Recursive Fibonacci sequence up to $n is $recursiveFibonacciResult and took $recursiveFibonacciTime seconds\n";
echo "Non-recursive Fibonacci sequence up to $n is $nonRecursiveFibonacciResult and took $nonRecursiveFibonacciTime seconds\n";

if ($recursiveFibonacciTime < $nonRecursiveFibonacciTime) {
  echo "Calculated Fibonacci sequence using recursive function was faster by " . ($nonRecursiveFibonacciTime - $recursiveFibonacciTime) . " seconds\n";
} else {
  echo "Calculated Fibonacci sequence using non-recursive function was faster by " . ($recursiveFibonacciTime - $nonRecursiveFibonacciTime) . " seconds\n";
}
?>