<!DOCTYPE html>
<html>
<head>
    <title>Car Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="panel">
    <a href="index.php">Home</a>
    <a href="all_cars.php">All Cars</a>
    <a href="add_car.php">Add Car</a>
</div>
<?php
$host = "db"; // using localhost or 127.0.0.1 will fail, because each container has its own "localhost"
$username = "root";
$password = "example";
$database = "myDB";

$conn = mysqli_connect($host, $username, $password, $database, 3306);

if (!$conn) {
    exit("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM car ORDER BY price ASC LIMIT 5";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Make</th><th>Model</th><th>Price</th><th>Production Year</th><th>Description</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['made'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['production_year'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No cars found.";
}

mysqli_close($conn);
?>
</body>
</html>