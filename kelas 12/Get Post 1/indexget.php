<?php

if(isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $password = $_GET['password'];

    echo "<br>";
    echo "<h3>Data yang Diterima:</h3>" . "<br>";
    echo "Nama: " . ($nama) . "<br>";
    echo "Password: " . ($password) . "<br>";
}
