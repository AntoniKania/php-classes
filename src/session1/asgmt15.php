<?php

function calculateTriangleArea() {
  $base = readline("Enter the base of the triangle: ");
  $height = readline("Enter the height of the triangle: ");
  $area = 0.5 * $base * $height;
  echo "The area of the triangle is: " . $area . "\n";
}

function calculateRectangleArea() {
  $length = readline("Enter the length of the rectangle: ");
  $width = readline("Enter the width of the rectangle: ");
  $area = $length * $width;
  echo "The area of the rectangle is: " . $area . "\n";
}

function calculateTrapezoidArea() {
  $base1 = readline("Enter the length of the first base: ");
  $base2 = readline("Enter the length of the second base: ");
  $height = readline("Enter the height of the trapezoid: ");
  $area = 0.5 * ($base1 + $base2) * $height;
  echo "The area of the trapezoid is: " . $area . "\n";
}

$figure = readline("Enter the name of the figure to calculate (triangle, rectangle, trapezoid): ");

switch ($figure) {
  case 'triangle':
      calculateTriangleArea();
      break;
  case 'rectangle':
      calculateRectangleArea();
      break;
  case 'trapezoid':
      calculateTrapezoidArea();
      break;
  default:
      echo "Invalid input\n";
}

?>