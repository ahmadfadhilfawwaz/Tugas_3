<?php 
$mahasiswa = [
    "001"=> "ahmad",
    "002"=> "budi",
    "003"=> "chika",
    "004"=> "dhini",
    "005"=> "erwin",
    //untuk memasukkan value, kita harus membuat key yang mempresentasikan valuenya.
    //tanda => dapat diartikan sebagai merujuk
    //key => value
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array assosiative</title>
</head>
<body>
    <?php foreach ( $mahasiswa as $nrp => $nama) : ?>
        <li><?="$nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>