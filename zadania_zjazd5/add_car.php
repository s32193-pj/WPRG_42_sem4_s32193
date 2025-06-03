<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<form method="post">
    Type: <input type="text" name="type">
    Model: <input type="text" name="model">
    Price: <input type="number" name="price">
    Year: <input type="number" name="year">
    Description: <input type="text" name="description">
    <button type="submit">Submit</button>


</form>

</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $password = "mleko";
    $username = "Reinhardt";
    $database = "cars_db";
    $server = "localhost";

    $msql_connection = mysqli_connect($server, $username, $password, $database);


    $type = $_POST["type"];
    $model = $_POST["model"];
    $price = $_POST["price"];
    $year = $_POST["year"];
    $description = $_POST["description"];


    $query = "INSERT INTO cars (type, model, price, year, description) VALUES ('" . $type . "', '" . $model . "', '" . $price . "', '" . $year . "', '" . $description . "')";

    $result = mysqli_query($msql_connection, $query);


}

