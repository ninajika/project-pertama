
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 17</title>
</head>
<body>
    <?php
        // Data produk dan harga
        $produk = [
            'Kaos' => 100000,
            'Celana' => 200000,
            'Topi' => 50000
        ];

        // keranjang belanja (produk dan jumlah)
        $keranjang = [
            'Kaos' => isset($_POST['kaos']) ? $_POST['kaos'] : 0,
            'Celana' => isset($_POST['celana']) ? $_POST['celana'] : 0,
            'Topi' => isset($_POST['topi']) ? $_POST['topi'] : 0
        ];

        $total = 0;
        foreach ($keranjang as $item => $qty) {
            if (isset($produk[$item])) {
                $total += $produk[$item] * $qty;
            }
        }
    ?>
    <form action="tugas_17.php" method="post">
        <label for="produk1">Berapa Banyak Kaos (100.000)</label>
        <input type="number" id="kaos" name="kaos"><br>
        <label for="produk2">Berapa Banyak Celana (200.000)</label>
        <input type="number" id="celana" name="celana"><br>
        <label for="produk3">Berapa Banyak Topi (50.000)</label>
        <input type="number" id="topi" name="topi"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Total belanja: Rp. " . number_format($total, 0, ',', '.') . "</p>";
}
// result : Total belanja: Rp. 550.000
?>