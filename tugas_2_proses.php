<?php
$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;

if ($angka % 2 == 0) {
    $message = "Angka genap";
} else {
    $message = "Angka ganjil";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas 2</title>
</head>
<body>
    <div><?php echo $message; ?></div>
</body>
</html>