<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 14</title>
</head>
<body>
    <form action="tugas_14_proses.php" method="post">
        <label for="angka">Masukkan Angka (pisahkan dengan koma):</label>
        <input type="text" id="angka" name="angka"><br>
        <input type="submit" value="Cari Nilai Terbesar">
    </form>
</body>
</html>

<?php
// function nilai_terbesar($arr) {
//     $max = $arr[0];
//     foreach ($arr as $nilai) {
//         if ($nilai > $max) {
//             $max = $nilai;
//         }
//     }
//     return $max;
// }

// $angka = [10, 5, 20, 15, 30];
// echo "Nilai terbesar: " . nilai_terbesar($angka);

// result : Nilai terbesar: 30
?>