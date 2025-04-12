<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="POST" action="zjazd2.php">
        X: <input type="number" name="x">
        Y: <input type="number" name="y">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="add">Calculate</button>
    </form>
    <p>Outcome: <?php echo isset($_GET['outcome']) ? $_GET['outcome'] : ""; ?></p>


</body>
</html>