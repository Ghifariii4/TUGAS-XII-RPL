<?php

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    echo "<br>";
    echo "<h3>Data yang Diterima:</h3>" . "<br>";
    echo "Nama: " . ($nama) . "<br>";-
    echo "Password: " . ($password) . "<br>";
}
