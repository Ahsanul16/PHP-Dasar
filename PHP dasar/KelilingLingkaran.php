<?php
// Menghitung keliling lingkaran
function hitungKelilingLingkaran($radius) {
    $keliling = 2 * M_PI * $radius;
    return $keliling;
}

// Jari-jari lingkaran
$jari_jari = 15; // dalam satuan cm

// Menggunakan fungsi untuk menghitung keliling
$keliling = hitungKelilingLingkaran($jari_jari);

// Menampilkan hasil
echo "Keliling lingkaran dengan jari-jari 15 cm adalah: " . $keliling . " cm";
?>
