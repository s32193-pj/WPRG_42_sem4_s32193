<?php
$outcome = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    $y = $_POST["y"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "+":
            $outcome = $x + $y;
            break;
        case "-":
            $outcome = $x - $y;
            break;
        case "*":
            $outcome = $x * $y;
            break;
        case "/":
            $outcome = $x / $y;
            break;
    }

    header("Location: forms.php?outcome=$outcome");
    exit();
}

?>