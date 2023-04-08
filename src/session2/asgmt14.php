<!DOCTYPE html>
<html>
<head>
  <title>Check if a Number is Prime</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" name="submit" value="Check">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];

  $iterations = 0;

  if (filter_var($number, FILTER_VALIDATE_INT) && $number > 1) {
    if (isPrime($number, $iterations)) {
      echo "$number is a prime number. (Number of iterations: " . $iterations . ")";
    } else {
      echo "$number is not a prime number. (Number of iterations: " . $iterations . ")";
    }
  } else {
    echo "Please enter a positive integer greater than 1. (Number of iterations: " . $iterations . ")";
  }
}

function isPrime($n, &$iterations) {
  if (($n > 2 && $n % 2 == 0) || ($n > 3 && $n % 3 == 0)) {
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
?>