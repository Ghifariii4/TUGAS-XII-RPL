<?php
$kkm = 75;

$data_mahasiswa1 = [
    "Nama" => "Andi",
    "Nilai" => 80,
   
];

$data_mahasiswa2 = [
    "Nama" => "Budi", 
    "Nilai" => 93,
    
];

$data_mahasiswa3 = [
    "Nama" => "Sarah",
    "Nilai" => 75,
];

$database_mahasiswa = [
    $data_mahasiswa1,
    $data_mahasiswa2,
    $data_mahasiswa3
];

foreach ($database_mahasiswa as $mhsw) {
    $nilai = $mhsw["Nilai"];

    if ($nilai > $kkm + 10) {
        echo "Selamat {$mhsw['Nama']}, Predikat A, dengan nilai $nilai<br>";
    } elseif ($nilai > $kkm + 5) {
        echo "Selamat {$mhsw['Nama']}, Predikat B, dengan nilai $nilai <br>";
    } elseif ($nilai > $kkm) {
        echo "Selamat {$mhsw['Nama']}, Predikat C, dengan nilai $nilai <br>";
    } elseif ($nilai == $kkm) {
        echo "{$mhsw['Nama']}, nilai pas KKM, dengan nilai $nilai<br>";
    } else {
        echo "maaf{$mhsw['Nama']}, anda tidak lulus karena nilai anda $nilai <br>";
    }
}