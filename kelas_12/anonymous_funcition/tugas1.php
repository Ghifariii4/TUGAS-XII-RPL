<?php
$tampilkanPesan = function ($nama) {
    echo "Halo $nama, selamat belajar Anonymous Function di PHP!<br>";
};

$pesanSiswa = $tampilkanPesan;


$pesanSiswa("Januar");


$perkalian = function ($a, $b) {
    return $a * $b;
};


echo "Hasil perkalian 5 x 4 = " . $perkalian(5, 4);
?>
