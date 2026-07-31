<?php
$title = "Belajar Pemrograman PHP Untuk Pemula";

$kata = explode(" ", $title);
$kata = array_map('strtolower', $kata);
$slug = implode("-", $kata);

echo "Judul: " . $title . "\n";
echo "<br>";
echo "Jumlah Kata: " . count($kata) . "\n";
echo "<br>";
echo "Slug: " . $slug . "\n";
?>