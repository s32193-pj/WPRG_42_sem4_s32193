<?php
session_start();
if (!$_SESSION['logged_in']) {
    header('Location: login.php');
} else {

    $step = 1;
    $number_people = 1;

    if (isset($_POST['number_people'])) {
        $number_people = (int)$_POST['number_people'];
        $step = 2;
    }

    if (isset($_POST['submitted']) && $_POST['submitted'] == "yes") {
        $step = 3;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz rejestracji</title>
</head>
<body>
<?php if ($step === 1): ?>
    <form method="POST">
        <label for="number_people">Liczba osób:</label>
        <select name="number_people" id="number_people">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit">Dalej</button>
    </form>

<?php elseif ($step === 2): ?>
    <form method="POST">
        <input type="hidden" name="submitted" value="yes">
        <input type="hidden" name="number_people" value="<?= $number_people ?>">
        <?php for ($i = 1; $i <= $number_people; $i++): ?>
            <fieldset>
                <legend>Dane osoby <?= $i ?></legend>
                <label>Imię: <input type="text" name="name<?= $i ?>"></label><br>
                <label>Nazwisko: <input type="text" name="surname<?= $i ?>"></label><br>
                <label>Email: <input type="email" name="email<?= $i ?>"></label><br>
                <label>Numer konta: <input type="number" name="acc<?= $i ?>"></label><br>
                <label>Dzień przyjazdu: <input type="number" name="day<?= $i ?>"></label><br>
            </fieldset><br>
        <?php endfor; ?>
        <button type="submit">Wyślij</button>
    </form>

<?php elseif ($step === 3): ?>
    <h2>Potwierdzenie zgłoszenia</h2>
    <?php

    $cookie_array = array();


    $number_people = (int)$_POST['number_people'];
    for ($i = 1; $i <= $number_people; $i++) {
        $name = htmlspecialchars($_POST["name$i"]);
        $surname = htmlspecialchars($_POST["surname$i"]);
        $email = htmlspecialchars($_POST["email$i"]);
        $acc = htmlspecialchars($_POST["acc$i"]);
        $day = htmlspecialchars($_POST["day$i"]);


        $cookie_array[0]  = array(
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'acc' => $acc,
            'day' => $day
        );

        echo "<h3>Osoba $i</h3>";
        echo "<p><strong>Imię:</strong> $name</p>";
        echo "<p><strong>Nazwisko:</strong> $surname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Numer konta:</strong> $acc</p>";
        echo "<p><strong>Dzień przyjazdu:</strong> $day</p><hr>";
    }

    setcookie('cookie', json_encode($cookie_array), time() + (60 * 5), "/");

    session_unset();
    session_destroy();
    ?>
<?php endif; ?>
</body>
</html>


