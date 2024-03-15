<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <form action="tugas_3_proses.php" method="post">
        <label for="tahun">Masukkan Tahun:</label>
        <input type="number" id="tahun" name="tahun"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

// $tahun = 2024;

// if ($tahun % 4 == 0) {
//     if ($tahun % 100 == 0) {
//         if ($tahun % 400 == 0) {
//             echo "Tahun Kabisat";
//         } else {
//             echo "Bukan tahun kabisat";
//         }
//     } else {
//         echo "Tahun kabisat";
//     }
// } else {
//     echo "Bukan tahun kabisat";
// }

// result : "Tahun kabisat"
?>