<?php
session_start();

file_put_contents("data.txt",
$_SESSION['nama']." | ".
$_SESSION['email']." | ".
$_SESSION['telp']." | ".
$_SESSION['tiket']."\n",
FILE_APPEND);

session_destroy();

echo "<h2>Pendaftaran Berhasil!</h2>";