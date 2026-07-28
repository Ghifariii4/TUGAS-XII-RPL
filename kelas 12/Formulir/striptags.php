<?php

$text = "Ini adalah Input user";

echo "sebelum" . $text . "disini";
echo "<br>";
echo "sesudah" . trim($text) . "disni";
echo "<br>";

$text2 = "<script>alert('halo semuanya!')</script>";
$text3 = "<b> Halo </b> semuanya";
echo strip_tags($text2, '<b>');
echo "<br>";
echo strip_tags($text3, '<b>');

