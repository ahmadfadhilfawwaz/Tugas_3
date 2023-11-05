<?php 
$hari = ["senin", "selasa"];

print_r($hari);
echo "</br>";
$hari[] = "rabu"; //menambahkan elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3] = "kamis"; // menambahkan elemen pada index yg kita tentukan
                    //jika index sudah terisi, maka elemen lama akan diganti dengan elemen baru
print_r($hari);
?>