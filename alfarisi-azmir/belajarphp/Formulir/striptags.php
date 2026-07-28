<?php

$text = "Ini adalah Input user";

echo "sebelum" . $text . "hereee";
echo "<br>";
echo "sesudah" . trim($text) . "hereee";
echo "<br>";

$text2 = "<script>alert('halo gusii!')</script>";
$text3 = "<b> Halo </b> gusi";
echo strip_tags($text2, '<b>');
echo "<br>";
echo strip_tags($text3, '<b>');
/* alfarisi azmir */
