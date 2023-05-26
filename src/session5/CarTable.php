<?php
class CarTable {
    private static $conn;

    private static function getConnection() {
        $host = "db"; // using localhost or 127.0.0.1 will fail, because each container has its own "localhost"
        $username = "root";
        $password = "example";
        $database = "myDB";

        if (!isset(self::$conn)) {
            self::$conn = mysqli_connect($host, $username, $password, $database);

            if (!self::$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

        return self::$conn;
    }

    public static function displayCarTable($query) {
        $conn = self::getConnection();

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr/><th>Id</th><th>Make</th><th>Model</th><th>Price</th><th>Production Year</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><a href='car_details.php?id=" . $row['id'] . "'>" . $row['id'] . "</a></td>";
                echo "<td>" . $row['made'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['production_year'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No cars found.";
        }
    }

    public static function displayCarDetails($carId) {
        $conn = self::getConnection();
        $query = "SELECT * FROM car WHERE id = $carId";

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
    }
}
?>
