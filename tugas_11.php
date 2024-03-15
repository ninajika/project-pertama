<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 11</title>
</head>
<body>
    <form action="tugas_11.php" method="post">
        <label for="angka">Masukkan Angka:</label>
        <input type="number" id="angka" name="angka"><br>
        <input type="submit" value="Hitung">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
    $jumlah_digit = 0;

    while ($angka != 0) {
        $angka = floor($angka / 10);
        $jumlah_digit++;
    }

    echo "<p>Jumlah digit : $jumlah_digit</p>";
}
?>
</body>
</html>


<?php
// $angka = 12345;
// $jumlah_digit = 0;

// while ($angka != 0) {
//     $angka = floor($angka / 10);
//     $jumlah_digit++;
// }

// echo "Jumlah digit : $jumlah_digit";

// result : Jumlah digit : 5
?>