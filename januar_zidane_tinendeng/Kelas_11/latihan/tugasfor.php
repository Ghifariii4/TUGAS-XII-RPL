<?php
$buah = array ("duren, mangga, Jambu");
echo "Menampilkan data dengan perulangan for<br>";

for ($i=0; $i <count($buah);$i++){
    echo ($i + 1). ". ".$buah[$i]. "<br";
}
echo "<br>";

echo "Menampilkan data buah dengan perulangan <br>";

foreach ($buah as $item){
    echo ". " . $item . "<br>";
}
?>