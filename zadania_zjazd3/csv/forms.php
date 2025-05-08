<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="POST" action="zadanie2.php">
        <select name="number_people">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        Name: <input type="text" name="name">
        Surname: <input type="text" name="surname">
        E-Mail: <input type="email" name="email">
        Account number: <input type="number" name="acc">
        Day of arrival: <input type="number" maxlength="2" name="day">
        <button type="submit" name="submit" value="submit">Submit</button>
        <button type="submit" name="load" value="load">Load</button>

    </form>

</body>
</html>