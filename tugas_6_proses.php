<?php
$kode_menu = isset($_POST['pilihan']) ? $_POST['pilihan'] : '';

switch ($kode_menu) {
    case 'A':
        $harga = "Harga makanan: Rp. 20.000";
        break;
    case 'B':
        $harga = "Harga makanan: Rp. 25.000";
        break;
    case 'C':
        $harga = "Harga makanan: Rp. 30.000";
        break;
    default:
        $harga = "Menu tidak tersedia";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <h2><?php echo $harga; ?></h2>
</body>
</html>
