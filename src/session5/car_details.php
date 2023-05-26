<?php
require_once('CarTable.php');

if (isset($_GET['id'])) {
    $carId = $_GET['id'];
    CarTable::displayCarDetails($carId);
} else {
    echo "Invalid car ID.";
}
?>
