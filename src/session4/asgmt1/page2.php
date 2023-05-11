<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
</head>
<body>
	<h1>Details</h1>
	<form method="post" action="page3.php">
		<?php
		echo session_id();
		$quantity = $_SESSION['quantity'];
		for($i = 1; $i <= $quantity; $i++){
			echo "<h2>Person $i</h2>";
			echo "<label for='person{$i}_name'>Name:</label>";
			echo "<input type='text' name='person{$i}_name' id='person{$i}_name'><br><br>";
			echo "<label for='person{$i}_email'>Email:</label>";
			echo "<input type='email' name='person{$i}_email' id='person{$i}_email'><br><br>";
			echo "<label for='person{$i}_phone'>Phone:</label>";
			echo "<input type='tel' name='person{$i}_phone' id='person{$i}_phone'><br><br>";
		}
		?>
		<button type="submit" name="submit">Save to session and go to page 3</button>
	</form>
	<form method="post" action="index.php">
		<button type="submit" name="submit">Go back to page 1</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	for($i = 1; $i <= $quantity; $i++){
		$_SESSION["person{$i}_name"] = $_POST["person{$i}_name"];
		$_SESSION["person{$i}_email"] = $_POST["person{$i}_email"];
		$_SESSION["person{$i}_phone"] = $_POST["person{$i}_phone"];
	}
	exit();
}
?>