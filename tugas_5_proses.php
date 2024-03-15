<?php
$kata = isset($_POST['kata']) ? $_POST['kata'] : 0;

if (strrev($kata) == $kata) {
    $message = "Palindrom";
} else {
    $message = "Bukan Palindrom";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas 5</title>
</head>
<body>
    <div><?php echo "Kata ini Merupakan Kata " . $message; ?></div>
</body>
</html>