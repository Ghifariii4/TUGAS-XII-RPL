<?php
$title = "Belajar Pemrograman PHP untuk Pemula";

$words = explode(" ", $title);

$words = array_map('strtolower', $words);

$slug = implode("-", $words);

echo "Judul Asli : " . $title . "<br>";
echo "Hasil Slug : " . $slug . "<br><br>";

echo "<pre>"; 
print_r($words);
echo "</pre>";
?>