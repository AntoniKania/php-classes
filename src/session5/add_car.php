<?php
require_once('CarTable.php');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carData = array(
        'made' => $_POST['made'],
        'model' => $_POST['model'],
        'price' => $_POST['price'],
        'production_year' => $_POST['production_year'],
        'description' => $_POST['description']
    );

    $errors = CarTable::validateForm($carData);

    if (empty($errors)) {
        $carId = CarTable::insertCar($carData);
        header("Location: car_details.php?id=" . $carId);
        exit;
    } else {
        echo "Invalid input data: " . $errors;
    }

    exit();
}

include('header.html');
?>

    <form method="POST" action="add_car.php">
        <label>Made:</label>
        <input type="text" name="made" required><br>

        <label>Model:</label>
        <input type="text" name="model" required><br>

        <label>Price:</label>
        <input type="number" name="price" required><br>

        <label>Production year:</label>
        <input type="number" name="production_year" required><br>

        <label>Description:</label>
        <textarea name="description" rows="4" required></textarea><br>

        <button type="submit">Add</button>
    </form>

<?php
include('footer.html')
?>