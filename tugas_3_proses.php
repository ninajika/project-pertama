<?php
$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : 0;


if ($tahun % 4 == 0) {
    if ($tahun % 100 == 0) {
        if ($tahun % 400 == 0) {
            $message = "Tahun Kabisat";
        } else {
            $message = "Bukan tahun kabisat";
        }
    } else {
        $message = "Tahun kabisat";
    }
} else {
    $message = "Bukan tahun kabisat";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas 3</title>
</head>
<body>
    <div><?php echo $message; ?></div>
</body>
</html>
