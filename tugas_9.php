<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 9</title>
</head>
<body>
    <form action="tugas_9.php" method="post">
        <label for="number">Masukan Nomor:</label>
        <input type="number" id="number" name="number" required><br>
        <input type="submit" value="Kalkulasi Faktorial">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = isset($_POST['number']) ? $_POST['number'] : 0;

        $faktorial = 1;
        for ($i = 1; $i <= $angka; $i++) {
            $faktorial *= $i;
        }

        echo "<p>Faktorial dari $angka adalah $faktorial</p>";
    }
    ?>
</body>
</html>

<?php
// $angka = 5;
// $faktorial = 1;

// for ($i = 1; $i <= $angka; $i++) {
//     $faktorial *= $i;
// }

// echo "Faktorial dari $angka adalah $faktorial";

// result : Faktorial dari 5 adalah 120
?>