<?php

$data_mahasiswa1=[
"Nama" => "Jaka",
"Nim" => "97654321",
"Umur" => 18 ,
"Alamat" => "Jalan Merdeka Raya",
"Jurusan" => "Ilmu Psikologi"
];
$data_mahasiswa2=[
"Nama" => "Arifin",
"Nim" => "123456789",
"Umur" => 17 ,
"Alamat" => "Bogor Raya no 17",
"Jurusan" => "Ilmu Komputer"
];
$data_mahasiswa3=[
"Nama" => "Alfian",
"Nim" => "12345654321",
"Umur" => 19 ,
"Alamat" => "Jalan Ragunan no 17",
"Jurusan" => "Ilmu Sastra"
];

$database_mahasiswa = [
    $data_mahasiswa1,
    $data_mahasiswa2,
    $data_mahasiswa3
];

echo "<pre>";
print_r($database_mahasiswa);
echo "</pre>";
