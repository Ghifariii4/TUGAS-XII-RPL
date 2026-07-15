<?php

 $data = [
     "Nama" => "Andi",
     "Umur" => 25,
     "Kota" => "Jakarta"
 ];

 foreach ($data as $key => $value) {
     echo $value . "<br>";
 };
$bulan = " bulan";
$produk = [
    "Nama Barang" => "Laptop",
    "Harga" => 1500000,
    "Merk" => "LOQ",
    "Garansi" => 12 . $bulan
];

foreach ($produk as $key => $value) {
    echo $value . "<br>";
};