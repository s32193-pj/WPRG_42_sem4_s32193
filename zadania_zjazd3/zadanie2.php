<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="tekst_do_zapisu">
    <input type="text" name="file_name">
    <button type="submit" value="tekst_save">save</button>
</form>



</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tekst_do_zapisu = $_POST['tekst_do_zapisu'];
        $file_name = $_POST['file_name'].".txt";

        $myfile = fopen($file_name, "a");
        fwrite($myfile, $tekst_do_zapisu);
        fclose($myfile);
    }


?>



