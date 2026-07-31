<?php

$text1 = " ini adalah input user";

echo "sebelum: " . $text1 . "disini";
echo "<br>";
echo "sesudah: " . trim($text1) . "disini";
echo "<br><br>";

$text2 = "<script>alert('Halo Semuanya!!')</script>";
$text3 = "<b> Halo </b> Semuanya!!";

echo "sebelum (text2): " . htmlspecialchars($text2);
echo "<br>";
echo "sesudah (text2): " . strip_tags($text2);
echo "<br><br>";

echo "sebelum (text3): " . $text3;
echo "<br>";
echo "sesudah (text3 - hapus semua tag): " . strip_tags($text3);
echo "<br>";
echo "sesudah (text3 - tetap izinkan tag b): " . strip_tags($text3, '<b>');
