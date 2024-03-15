<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 12</title>
</head>
<body>
    <form action="tugas_12_proses.php" method="post">
        <label for="angka">Masukkan Angka (pisahkan dengan koma):</label>
        <input type="text" id="angka" name="angka"><br>
        <input type="submit" value="Hitung Total">
    </form>
</body>
</html>

<?php
// function jumlahkan($arr) {
//     $total = 0;
//     foreach ($arr as $nilai) {
//         $total += $nilai;
//     }
//     return $total;
// }

// $angka = [1, 2, 3, 4, 5];
// echo "Total: " . jumlahkan($angka);

// result : Total: 15
?>