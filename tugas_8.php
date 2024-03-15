<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8</title>
</head>
<body>
    <form action="tugas_8.php" method="post">
        <label for="angka">Berapa Banyak Angka Mau Di print</label>
        <input type="number" id="limit2" name="limit2"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$limitnum = isset($_POST['limit2']) ? $_POST['limit2'] : 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Result: ";

    while ($limitnum <= 10) {
        echo $limitnum . " ";
        $limitnum += 2;
    }
    echo "</p>";
}
// $num = 2;

// while ($num <= 10) {
//     echo $num . " ";
//     $num += 2;
// }

// result : 2 4 6 8 10
?>