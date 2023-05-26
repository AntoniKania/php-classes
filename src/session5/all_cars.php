<?php
require_once('CarTable.php');
include('header.html');

$query = "SELECT * FROM car ORDER BY production_year DESC";
CarTable::displayCarTable($query);

include('footer.html');
?>