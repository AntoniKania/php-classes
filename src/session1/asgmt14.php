<?php
function getBirthDate($pesel) {
  $year = substr($pesel, 0, 2);
  $month = substr($pesel, 2, 2);
  $day = substr($pesel, 4, 2);

  return $day . '-' . $month . '-' . $year;
}

$pesel = "810203PPP6K";
echo getBirthDate($pesel);
?>