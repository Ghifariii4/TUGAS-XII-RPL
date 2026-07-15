<?php
$produk = [
    [
        "Nama Barang" => "Smartphone XYZ",
        "Harga" => 3000000,
        "Merk" => "XYZ",
        "Garansi" => "1 Tahun"
    ],
    [
        "Nama Barang" => "Laptop ABC",
        "Harga" => 7500000,
        "Merk" => "ABC",
        "Garansi" => "2 Tahun"
    ],
    [
        "Nama Barang" => "Headphone QWE",
        "Harga" => 500000,
        "Merk" => "QWE",
        "Garansi" => "6 Bulan"
    ],
    [
        "Nama Barang" => "Smartwatch LMN",
        "Harga" => 1200000,
        "Merk" => "LMN",
        "Garansi" => "1 Tahun"
    ]
];

// Menampilkan semua data menggunakan foreach
foreach ($produk as $item) {
    foreach ($item as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<hr>"; // Untuk memisahkan tiap produk
}
?>
