<?php

$buah = ["pisang", "apel", "semangka"];
$sayur = ["sawi", "wortel", "cabai"];

for ($i = 0; $i < count($buah); $i++) {
    echo "Saya menjual: " . $buah[$i] . " dan " . $sayur[$i] . "<br>";
}

echo "<h3>Daftar Buah:</h3>";

foreach ($buah as $value) {
    echo "Saya menjual: " . $value . "<br>";
}

echo "<h3>Daftar Sayur:</h3>";

foreach ($sayur as $value) {
    echo "Saya menjual: " . $value . "<br>";
}