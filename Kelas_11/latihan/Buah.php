<?php
$namaBuah = 'Apel'; 
$jumlahBeli = 3;

switch($namaBuah){
    case "Apel":
        $harga = 20000;
    break;
         case "mangga":
        $harga = 25000;
    break;
     case "jeruk":
        $harga = 30000;
    break;

    default:
    echo "Buah Segar di pasar rebo";
    exit;
}

$total = $jumlahBeli * $harga;
echo "Buah Yang anda pilih $namaBuah<br>";
echo "Jumlah Yang anda beli $jumlahBeli<br>";
echo "Harga per satuan kg RP.$harga<br>";
echo "<br>";
echo "<br>";
echo " Jumlah yang harus anda bayar RP.$total";
?>