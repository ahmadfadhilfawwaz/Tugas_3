<?php
// Membuat associative array dengan data budaya daerah di Indonesia
$budayaDaerah = array(
    "Budaya 1" => array(
        "Nama" => "Tari Pendet",
        "Penjelasan" => "Tari Pendet adalah tari tradisional Bali yang sering digunakan untuk penyambutan tamu. Gerakan tari ini indah dan penuh makna.",
        "Asal Daerah" => "Bali",
        "Pencipta" => "i wayan rindi",
        "Gambar" => "tari_pendet.jpeg"
    ),
    "Budaya 2" => array(
        "Nama" => "Wayang Kulit",
        "Penjelasan" => "Wayang Kulit adalah seni pertunjukan tradisional Jawa yang menggunakan boneka kulit dan cerita epik dari epik Ramayana dan Mahabharata.",
        "Asal Daerah" => "Jawa",
        "Pencipta" => "sunan kalijaga",
        "Gambar" => "wayang_kulit.jpeg"
    ),
    "Budaya 3" => array(
        "Nama" => "Batik",
        "Penjelasan" => "Batik adalah seni kriya tekstil khas Indonesia. Motif batik dapat ditemukan di seluruh Indonesia dan memiliki makna simbolis.",
        "Asal Daerah" => "Seluruh Indonesia",
        "Pencipta" => "Go Tik Swan",
        "Gambar" => "batik.jpeg"
    ),
    "Budaya 4" => array(
        "Nama" => "tari saman",
        "Penjelasan" => "tari saman adalah tarian yang menampilkan gerak tepuk tangan dan yang lainnya",
        "Asal Daerah" => "aceh",
        "Pencipta" => "syekh saman",
        "Gambar" => "tari_saman.jpeg"
    ),
    "Budaya 5" => array(
        "Nama" => "gamelan",
        "Penjelasan" => "Gamelan adalah musik ansambel tradisional di Indonesia yang memiliki tangga nada pentatonis dalam sistem tangga nada (laras) slendro dan pelog",
        "Asal Daerah" => "gamelan",
        "Pencipta" => "Sang Hyang Guru",
        "Gambar" => "gamelan.jpeg"
    ),
    "Budaya 6" => array(
        "Nama" => "Rendang",
        "Penjelasan" => "Rendang adalah masakan tradisional Minangkabau yang terkenal di seluruh Indonesia. Masakan ini adalah daging yang dimasak dalam santan dengan rempah-rempah.",
        "Asal Daerah" => "Minangkabau, Sumatera Barat",
        "Pencipta" => "Masyarakat Minangkabau",
        "Gambar" => "rendang.jpeg"
    ),
    "Budaya 7" => array(
        "Nama" => "Pantun",
        "Penjelasan" => "Pantun adalah bentuk puisi lisan tradisional Indonesia yang memiliki aturan irama dan rima khusus. Pantun sering digunakan dalam berbagai upacara dan perayaan.",
        "Asal Daerah" => "Seluruh Indonesia",
        "Pencipta" => "Masyarakat Indonesia",
        "Gambar" => "pantun.jpeg"
    ),
    "Budaya 8" => array(
        "Nama" => "keris",
        "Penjelasan" => "Keris adalah senjata tikam gugusan belati yang termasuk salah satu budaya khas Nusantara.",
        "Asal Daerah" => "pulau jawa",
        "Pencipta" => "empu",
        "Gambar" => "keris.jpeg"
    ),
    "Budaya 9" => array(
        "Nama" => "Toraja",
        "Penjelasan" => "Budaya Toraja adalah budaya khas suku Toraja di Sulawesi Selatan. Ritual pemakaman dan arsitektur rumah tradisional Toraja terkenal di seluruh dunia.",
        "Asal Daerah" => "Sulawesi Selatan",
        "Pencipta" => "Suku Toraja",
        "Gambar" => "toraja.jpeg"
    ),
    "Budaya 10" => array(
        "Nama" => "guritan",
        "Penjelasan" => "Guritan adalah salah satu jenis sastra daerah masyarakat Besemah yang ditampilkan dalam bentuk teater tutur",
        "Asal Daerah" => "palembang",
        "Pencipta" => "pengurit",
        "Gambar" => "guritan.jpeg"
    ),
);

// Mencetak tabel
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Penjelasan</th><th>Asal Daerah</th><th>Pencipta</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($budayaDaerah as $budaya) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $budaya["Nama"] . "</td>";
    echo "<td>" . $budaya["Penjelasan"] . "</td>";
    echo "<td>" . $budaya["Asal Daerah"] . "</td>";
    echo "<td>" . $budaya["Pencipta"] . "</td>";
    echo "<td><img src='" . $budaya["Gambar"] . "' alt='" . $budaya["Nama"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>