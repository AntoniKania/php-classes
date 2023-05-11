<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page 3</title>
</head>
<body>
	<h1>Summary</h1>

	<?php
	echo "<p><strong>Card number:</strong> " . $_SESSION['card_number'] . "</p>";
	echo "<p><strong>Name:</strong> " . $_SESSION['name'] . "</p>";
	echo "<p><strong>Email:</strong> " . $_SESSION['email'] . "</p>";
	echo "<p><strong>Phone:</strong> " . $_SESSION['phone'] . "</p>";
	echo "<p><strong>Number of people:</strong> " . $_SESSION['num_people'] . "</p>";

	echo "<p>List of people:</p>";
	echo "<ul>";
	foreach ($_SESSION['people'] as $person) {
		echo "<li>" . $person . "</li>";
	}
	echo "</ul>";
	?>

</body>