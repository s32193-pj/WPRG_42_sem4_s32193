<html>
<head>
    <meta charset='UTF-8'>
    <title>mleko</title>
</head>
<body>
<form METHOD="POST">
    Input number: <input type="number" name="number">
    <button type="submit">check</button>
</form>
<?php
$prime = "";
$loops = 0;

if (isset($_POST['number'])) {
    $number = (int) $_POST['number'];
    $prime = true;

    if ($number < 2) {
        $prime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            $loops++;
            if ($number % $i == 0) {
                $prime = false;
                break;
            }
        }
    }

    echo "<p><strong>Liczba $number jest pierwsza:</strong> " . ($prime ? "TAK" : "NIE") . "</p>";
    echo "<p>Liczba iteracji: $loops</p>";
}
?>

</body>
</html>




