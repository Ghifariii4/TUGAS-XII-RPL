<?php
$hargaBarang = 100000;
$persenPajak = 0.07;

function hitungbelanja () {
    global $hargaBarang;
    $pajak =$hargaBarang * $GLOBALS['persenPajak'];
    $total = $hargaBarang + $pajak;

    return $total;
}

echo "Harga Barang: Rp." .$hargaBarang."<br>";
echo "Pajak(7%):Rp.".($hargaBarang*$persenPajak)."<br>";
echo "Total Belanja: Rp " . hitungbelanja();
?>