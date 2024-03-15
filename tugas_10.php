<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 10</title>
</head>
<body>
    <form action="tugas_10.php" method="post">
        <label for="panjang">Panjang Deret Fibonacci:</label>
        <input type="number" id="panjang" name="panjang" min="1"><br>
        <input type="submit" value="Generate">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : 0;
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;

    echo "<p>Deret Fibonacci:</p>";

    for ($i = 0; $i < $panjang; $i++) {
        echo $angka_sebelumnya . " ";
        $tambah = $angka_sebelumnya + $angka_sekarang;
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $tambah;
    }
}
?>
</body>
</html>

<?php
// $panjang = 10;
// $angka_sebelumnya = 0;
// $angka_sekarang = 1;

// echo "Deret Fibonacci: ";

// for ($i = 0; $i < $panjang; $i++) {
//     echo $angka_sebelumnya . " ";
//     $tambah = $angka_sebelumnya + $angka_sekarang;
//     $angka_sebelumnya = $angka_sekarang;
//     $angka_sekarang = $tambah;
// }

// result : Deret Fibonacci: 0 1 1 2 3 5 8 13 21 34
?>