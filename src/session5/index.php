<?php
require_once('CarTable.php');
include('header.html');

$query = "SELECT * FROM car ORDER BY price ASC LIMIT 5";
CarTable::displayCarTable($query);

include('footer.html');
?>