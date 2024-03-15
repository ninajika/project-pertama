<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 16</title>
</head>
<body>
    <form action="tugas_16_proses.php" method="post">
        <label for="angka">Masukkan Angka (pisahkan dengan koma):</label>
        <input type="text" id="angka" name="angka"><br>
        <input type="submit" value="Hitung Rata-rata">
    </form>
</body>
</html>


<?php
// function rata_rata($arr) {
//     $total = 0;
//     $count = count($arr);
//     foreach ($arr as $nilai) {
//         $total += $nilai;
//     }
//     return $total / $count;
// }

// $angka = [10, 20, 30, 40, 50];
// echo "Rata-rata " . rata_rata($angka);
// result : Rata-rata 30
?>