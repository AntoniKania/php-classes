<!DOCTYPE html>
<html>

<head>
  <title>Calculating Values Based on Birth Date</title>
</head>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="number">Enter your birth date:</label>
    <input type="date" name="birth_date" id="birth_date" required>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>

<?php
function getDayOfBirth($birthDate) {
  return $birthDate->format('l');
}

function getAge($birthDate) {
  $today = new DateTime();
  return date_diff($today, $birthDate)->y;
}

function getDaysTillNextBirthday($birthDate) {
  $today = new DateTime();
  $nextBirthday = $birthDate->modify('+' . getAge($birthDate) + 1 . ' years');

  return $today->diff($nextBirthday)->days;
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $birthDate = DateTime::createFromFormat('Y-m-d', $_POST["birth_date"]);

  echo "Day of birth: " . getDayOfBirth($birthDate);
  echo "<br>Age: " . getAge($birthDate);
  echo "<br>Number of days to next birthday: " . getDaysTillNextBirthday($birthDate);
}

?>