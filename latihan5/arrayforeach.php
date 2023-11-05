<?php 
$nama = ["ahmad", "budi", "chika", "dhini", "erwin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping for array</title>
</head>
<body>
    <?php 
    foreach ($nama as $absen) {//foreach akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";
    }
    ?>
</body>
</html>