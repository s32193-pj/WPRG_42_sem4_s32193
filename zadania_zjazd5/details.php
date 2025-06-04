<?php

if(isset($_GET['id'])){
    $car_id = $_GET['id'];

    $password = "mleko";
    $username = "Reinhardt";
    $database = "cars_db";
    $server = "localhost";

    $msql_connection = mysqli_connect($server, $username, $password, $database);

    $query = "SELECT * FROM cars WHERE id = '$car_id'";

    $result = mysqli_query($msql_connection, $query);

    if($result){
        $row = mysqli_fetch_assoc($result);
        echo $row['description'];
    }


}