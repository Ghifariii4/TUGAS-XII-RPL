<?php
$kehadiran_siswa = 100;
$nilai = 90;
$syarat_nilai = 85;
$syarat_hadir = 100;


echo "<h1><center> Syarat & Ketentuan Yang Berlaku </center></h1>";
echo "<h2><center>Syarat Nilai : Nilai Minimal adalah 85</center><h1>";
echo "<h2><center>Syarat Kehadiran: Syarat Kehadiran anda harus 100 %</center></h1>";

echo "<h3>Hasil anda :</h3>" ;

echo "Nilai Anda:" .$nilai ."<br>";
echo "Kehadiran anda dalam persentase (%): " . $kehadiran_siswa."%<br>";
echo "<br>";
echo "<br>";
echo "Keterangan:<br>";

//OR
if ($nilai > $syarat_nilai && $kehadiran_siswa = $syarat_hadir){
    echo "Selamat Anda Lulus dan mendapat sertifikat"."<br>";
}else {
     echo "Maaf, Anda belum Lulus"."<br>";
}



