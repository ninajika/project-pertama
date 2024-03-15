<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
    <form action="tugas_4_proses.php" method="post">
        <label for="umur">Masukkan Umur:</label>
        <input type="number" id="umur" name="umur"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php

// $umur = 25;

// if ($umur < 13) {
//     echo "Anak-anak";
// } else if ($umur >= 13 && $umur < 20) {
//     echo "Remaja";
// } else if ($umur >= 20 && $umur < 60) {
//     echo "Dewasa";
// } else if ($umur >= 100 && $umur < 5000){
//     echo "Sepuh";
// } else {
//     echo "Lansia";
// }

// result : "Dewasa"
?>