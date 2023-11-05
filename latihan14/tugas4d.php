<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4d</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kota</th>
                <th>Makanan Khas</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Array multidimensi dengan data kota, makanan khas, dan harga
            $daftar_makanan = array(
                array("Palembang", "pempek",35000),
                array("Sumatra barat", "Rendang", 10000),
                array("Jambi", "mie celor", 10000),
                array("Riau", "kacang pukul", 11000),
                array("Sumatra utara", "Bika ambon", 25000),
                array("Jakarta", "ketoprak betawi", 10000),
                array("Bandung", "batagor", 5000),
                array("Bali", "babi guling", 100000),
            );

            // Mengurutkan array berdasarkan harga (urutan menaik)
            usort($daftar_makanan, function ($a, $b) {
                return $a[2] - $b[2];
            });

            // Menampilkan data dalam tabel
            $no = 1;
            foreach ($daftar_makanan as $makanan) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $makanan[0] . "</td>";
                echo "<td>" . $makanan[1] . "</td>";
                echo "<td>Rp " . number_format($makanan[2], 0, ',', '.') . "</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>