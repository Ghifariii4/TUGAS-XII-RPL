<?php

$harga = 200000;
$jumlah = 3;

function hitungHarga($harga, $jumlah) {
    $total = $harga * $jumlah;
    $diskon = 0.1 * $total; 
    $totalBayar = $total - $diskon;

    return [
        'total' => $total,
        'diskon' => $diskon,
        'totalBayar' => $totalBayar
    ];
}

$hasil = hitungHarga($harga, $jumlah);

echo "Total Harga: " . $hasil['total'] . "<br>";
echo "Diskon 10%: " . $hasil['diskon'] . "<br>";
echo "Harga yang dibayar: " . $hasil['totalBayar'] . "<br>";

?>
