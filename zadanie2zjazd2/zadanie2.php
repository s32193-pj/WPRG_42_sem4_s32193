<?php


$number_people = isset($_POST["number_people"]) ? htmlspecialchars($_POST["number_people"]) : "";
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
$surname = isset($_POST["surname"]) ? htmlspecialchars($_POST["surname"]) : "";
$day = isset($_POST["day"]) ? htmlspecialchars($_POST["day"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$acc = isset($_POST["acc"]) ? htmlspecialchars($_POST["acc"]) : "";




echo "<!DOCTYPE html>

    <html>
         <head>
            <meta charset='UTF-8'>
            <title>confirmation</title>
        </head>
        <body>
            <p><strong>Number of people: </strong> $number_people</p>
            <p><strong>Name: </strong>$name</p>
            <p><strong>Surname: </strong>$surname</p>
            <p><strong>Day of arrival: </strong>$day</p>
            <p><strong>E-Mail: </strong>$email</p>
            <p><strong>Account number: </strong>$acc</p>
        </body>

    </html>
"
?>
