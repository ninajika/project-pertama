<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 13</title>
</head>
<body>
    <form action="tugas_13_proses.php" method="post">
        <label for="angka">Masukkan Angka (pisahkan dengan koma):</label>
        <input type="text" id="angka" name="angka"><br>
        <input type="submit" value="Hitung Total">
    </form>
</body>
</html>
<?php
// function kalikan($arr) {
//     $total = 1;
//     foreach ($arr as $nilai) {
//         $total *= $nilai;
//     }
//     return $total;
// }

// $angka = [1, 2, 3, 4, 5];
// echo "Hasil kali: " . kalikan($angka);

// result : Hasil kali: 120
?>