<?php



$password = "mleko";
$username = "Reinhardt";
$database = "cars_db";
$server = "localhost";

try {
    $msql_connection = mysqli_connect($server, $username, $password, $database);

    $querry = "SELECT * FROM cars ORDER BY year ASC";

    $result = mysqli_query($msql_connection, $querry);

    echo "<table border='1' width='88%'>";
    echo "<tr><th>Typ</th><th>Model</th><th>Cena</th><th>Rok</th><th>Opis</th></tr>";

    if($result) {
        while($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . " zł</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td><a href='details.php?id=" . $row['id'] . "'>DETAILS</a></td>";
            echo "</tr>";
        }
    }

} catch (mysqli_sql_exception $e) {
    echo "connection failed, error: " . $e->getMessage();
}