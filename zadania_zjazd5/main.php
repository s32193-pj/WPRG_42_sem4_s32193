<?php
$password = "mleko";
$username = "Reinhardt";
$database = "cars_db";
$server = "localhost";

try {
    $msql_connection = mysqli_connect($server, $username, $password, $database);

    $query = "SELECT * FROM cars ORDER BY price ASC LIMIT 5";

    $query_data = mysqli_query($msql_connection, $query);

    echo "<table border='1' width='88%'>";
    echo "<tr><th>Typ</th><th>Model</th><th>Cena</th><th>Rok</th><th>Opis</th></tr>";

    if($query_data) {
        while($row = mysqli_fetch_assoc($query_data)) {
            echo "<tr>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . " zł</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Błąd: " . mysqli_error($_SESSION["mysql_connection"]) . "</td></tr>";
    }


} catch (mysqli_sql_exception $e) {
    echo "connection failed, error: " . $e->getMessage();
}




