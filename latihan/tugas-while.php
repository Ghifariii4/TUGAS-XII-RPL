<?php

$Harga = 10000;
$beli = 3 ;

$satuan = 1;
$totalHarga = 0;

while ($satuan <= $beli ){
    echo 'pembelian ke-' . $satuan .'<br>';
    $totalHarga +=$Harga;
    $satuan++;  
}

echo "<br>Total Harga Rp.".$totalHarga;
?>

