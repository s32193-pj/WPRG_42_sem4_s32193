<?php
if(isset($_POST["submit"])){
$number_people = isset($_POST["number_people"]) ? htmlspecialchars($_POST["number_people"]) : "";
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
$surname = isset($_POST["surname"]) ? htmlspecialchars($_POST["surname"]) : "";
$day = isset($_POST["day"]) ? htmlspecialchars($_POST["day"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$acc = isset($_POST["acc"]) ? htmlspecialchars($_POST["acc"]) : "";
$list = array ($number_people, $name, $surname, $day, $email, $acc);

$file = fopen("list.csv", "a");
fputcsv($file, $list);
fclose($file);
}

if (isset($_POST["load"])) {
    if (file_exists("list.csv")) {
        echo "<h2>Submitted Entries</h2><table style='border: 1px solid #bf1414; border-collapse: collapse;'>";
        $file = fopen("list.csv", "r");
        while (($data = fgetcsv($file)) !== false) {
            echo "<tr>";
            foreach ($data as $cell) {
                echo "<td style='border: 1px solid black; padding: 4px;'>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        fclose($file);
        echo "</table>";
    } else {
        echo "<p>No entries found.</p>";
    }
}

?>


