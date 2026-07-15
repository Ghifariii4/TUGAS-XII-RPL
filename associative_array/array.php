<?php
$profilUtama = [
    "nama" => "Budi",
    "umur" => 22,
    "kerja" => "Mahasiswa"
];

// 2. Membuat array detail tambahan
$detailTambahan = [
    "hobi" => "Coding",
    "laptop" => "ASUS"
];

// 3. Menggabungkan kedua array
$profilLengkap = array_merge($profilUtama, $detailTambahan);

// Menampilkan hasil penggabungan
echo "=== Profil Lengkap ===<br>";
print_r($profilLengkap);
echo "<br><br>";

// 4. Mengambil semua key (label)
$daftarKey = array_keys($profilLengkap);
echo "=== Daftar Key ===<br>";
print_r($daftarKey);
echo "<br><br>";

// 5. Mengambil semua value (isi) dan mengubah ke indexed array
$daftarValue = array_values($profilLengkap);
echo "=== Daftar Value ===<br>";
print_r($daftarValue);
?>