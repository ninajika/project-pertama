<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
</head>
<body>

    <form action="tugas_7.php" method="post">
        <label for="angka">Berapa Banyak Angka Mau Di print</label>
        <input type="number" id="limit" name="limit"><br>
        <input type="submit" value="Submit">
    </form>
    
<?php
$limitnum = isset($_POST['limit']) ? $_POST['limit'] : 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Result: ";
    for ($i = 1; $i <= $limitnum; $i++) {
        echo $i . " ";
    }
    echo "</p>";
}

// for ($i = 1; $i <= 5; $i++) {
//     echo $i . " ";
// }

// result : 1 2 3 4 5
?>