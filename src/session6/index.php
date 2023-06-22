<?php
require_once 'Insurance.php';

$insurance = new Insurance("audi a6", "50000", 4.5, 500, 300, 250, 50, 2);

$insurancePrice = $insurance->calculatePrice();
echo "Insurance price: " . $insurancePrice;