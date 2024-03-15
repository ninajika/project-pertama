<?php
$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;

if ($angka > 10) {
    $message = "Angka lebih dari 10";
} else {
    $message = "Angka tidak lebih dari 10";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas 1</title>
</head>
<body>
    <div><?php echo $message; ?></div>
</body>
</html>