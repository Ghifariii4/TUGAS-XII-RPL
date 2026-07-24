<?php
$text = "ini adalah input user";

echo "sebelum" . $text. "disini";
echo "<br>";
echo "sesudah" . $text . "disini";
echo "<br>";

$text2 = "<script>alert('halo semua!')</script>";
$text3 = "<b> hallo semua </b>";

echo strip_tags($text3 , "<b>");
echo "<br>";