<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
</head>
<body>
	<h1>Some Reservation</h1>
	<form method="post" action="page2.php">
		<label for="card_number">Card number:</label>
		<input type="text" name="card_number" id="card_number"><br><br>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name"><br><br>
		<label for="quantity">Number of people: </label>
		<input type="number" name="quantity" id="quantity"><br><br>
		<button type="submit" name="submit">Next</button>
	</form>
</body>

<?php
if(isset($_POST['submit'])){
	$_SESSION['card_number'] = $_POST['card_number'];
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['quantity'] = $_POST['quantity'];
	exit();
}
?>