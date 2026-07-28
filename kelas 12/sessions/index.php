<?php

session_start();

$_SESSION['user_id'] = 101;
$_SESSION['nama'] = "John Doe";
$_SESSION['email'] = "papijanuar4@gmail.com";
$_SESSION['role'] = "admin";

echo "Session telah dibuat. Data berhasil disimpan di server." . "<br>";
?>