<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
</head>
<body>
    <form action="tugas_6_proses.php" method="post">
        <label for="pilihan">Pilih Menu:</label>
        <select id="pilihan" name="pilihan">
            <option value="A">Nasi Goreng</option>
            <option value="B">Bakso</option>
            <option value="C">Mie Ayam</option>
            <option value="D">Menu tidak tersedia</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
// $kode_menu = 'B';

// switch($kode_menu) {
//     case 'A':
//         echo "Harga makanan: Rp. 20.000";
//         break;
//     case 'B':
//         echo "Harga makanan: Rp. 25.000";
//         break;
//     case 'C':
//         echo "Harga makanan: Rp. 30.000";
//         break;
//     default:
//         echo "Menu tidak tersedia";
// }


// result : Harga makanan: Rp. 25.000
?>