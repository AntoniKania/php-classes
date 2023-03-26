<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>
	<h1>PHP Calculator</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="num1">First number:</label>
		<input type="number" id="num1" name="num1" required><br><br>
		<label for="num2">Second number:</label>
		<input type="number" id="num2" name="num2" required><br><br>
		<label for="operation">Operation:</label>
		<select id="operation" name="operation" required>
			<option value="addition">Addition</option>
			<option value="subtraction">Subtraction</option>
			<option value="multiplication">Multiplication</option>
			<option value="division">Division</option>
		</select><br><br>
		<input type="submit" value="Calculate">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operation = $_POST["operation"];

			switch ($operation) {
				case "addition":
					$result = $num1 + $num2;
					echo "Result of addition: " . $result;
					break;
				case "subtraction":
					$result = $num1 - $num2;
					echo "Result of subtraction: " . $result;
					break;
				case "multiplication":
					$result = $num1 * $num2;
					echo "Result of multiplication: " . $result;
					break;
				case "division":
					if ($num2 == 0) {
						echo "Cannot divide by zero!";
					} else {
						$result = $num1 / $num2;
						echo "Result of division: " . $result;
					}
					break;
				default:
					echo "No operation selected!";
			}
		}
	?>
</body>
</html>
