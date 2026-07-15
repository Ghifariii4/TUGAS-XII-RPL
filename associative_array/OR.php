<?php

$uangmurid = 100000;
$memori = 150000;
$uangguru = 250000 ;

echo " uang Murid : Rp." . $uangmurid ."<br>";
echo " uang Guru : Rp." . $uangguru ."<br>";
echo " harga Memori : Rp." . $memori ."<br>";
echo "<br>";

$sisaGuru  = $uangguru - $memori;
$sisaMurid = $uangmurid - $memori;

echo "Sisa uang Guru : Rp." . $sisaGuru . "<br>";
echo "Sisa uang Murid : Rp." . $sisaMurid . "<br>";
echo "<br>";

if ($uangmurid > $memori && $uangguru > $memori){
    echo "Silahkan beli saja";
}else {
    echo "Duit lu aja kurang , dasar kampung!!!!";
}

?>