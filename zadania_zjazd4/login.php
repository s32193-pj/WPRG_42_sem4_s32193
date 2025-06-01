    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <form method="post">
        Username: <input type="text" name="username">
        Password: <input type="password" name="password">
        <button type="submit">Log in</button>
    </form>

    </body>
    </html>

<?php
session_start();

    if(isset($_COOKIE['cookie'])){

        $cookie_value = json_decode($_COOKIE['cookie'], true);

        $number_people = count($cookie_value);
        for ($i = 1; $i <= $number_people; $i++) {
            $name = $cookie_value[$i-1]['name'];
            $surname = $cookie_value[$i-1]['surname'];
            $email = $cookie_value[$i-1]['email'];
            $acc = $cookie_value[$i-1]['acc'];
            $day = $cookie_value[$i-1]['day'];

            echo "<h3>Osoba $i</h3>";
            echo "<p><strong>Imię:</strong> $name</p>";
            echo "<p><strong>Nazwisko:</strong> $surname</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Numer konta:</strong> $acc</p>";
            echo "<p><strong>Dzień przyjazdu:</strong> $day</p><hr>";
        }
    }

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = trim($_POST["username"]);
    echo $username;
    $password = trim($_POST["password"]);
    echo $password;

    $credentials = file("user_pass.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $stored_username = $credentials[0];
    $stored_password = $credentials[1];

    if ($stored_username == $username && $stored_username == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
        header("location:forms.php");
        exit();
    } else {
        header("location:login_failure.php");
        exit();
    }
}

?>