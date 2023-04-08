<?php
$template = '
<h2>Booking Summary</h2>
<p>Number of guests: %s</p>
<p>First Names: %s</p>
<p>Last Names: %s</p>
<p>Address: %s</p>
<p>Credit card: %s</p>
<p>Email: %s</p>
<p>Date: %s</p>
<p>Arrival time: %s</p>
<p>Child bed: %s</p>
<p>Amenities: %s</p>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = unserialize(htmlspecialchars_decode($_POST['data']));
  $numOfGuests = $data['num_of_guests'];
	$address = $data['address'];	
	$creditCard = $data['credit_card'];
	$email = $data['email'];
	$date = $data['date'];
	$arrivalTime = $data['arrival_time'];
	$childBed = $data['arrival_time'];
  $firstNames = isset($_POST['first_names']) 
      ? implode(', ', $_POST['first_names'])
      : '';
  $lastNames = isset($_POST['last_names']) 
      ? implode(', ', $_POST['last_names'])
      : '';

  printf($template, $numOfGuests, $firstNames, $lastNames, $address, $creditCard, $email, $date, $arrivalTime, $childBed, $amenities);
}
?>