<?php
$umur = isset($_POST['umur']) ? $_POST['umur'] : 0;

if ($umur < 13) {
    $message = "Anak-anak";
} else if ($umur >= 13 && $umur < 20) {
    $message = "Remaja";
} else if ($umur >= 20 && $umur < 60) {
    $message = "Dewasa";
} else if ($umur >= 100 && $umur < 5000){
    $message = "Sepuh";
} else {
    $message = "Lansia";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas 4</title>
</head>
<body>
    <div><?php echo $message; ?></div>
</body>
</html>