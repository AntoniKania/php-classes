<?php
function calculateDiameter($radius) {
    return $radius * pi() * 2;
}

$radius = 4;

echo 'diameter is ' . calculateDiameter($radius);
?>
