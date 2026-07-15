<?php

$usernameBenar = "admin";
$passwordBenar = "12345";

do {
    echo "<script>
        var user = prompt('Masukkan Username:');
        var pass = prompt('Masukkan Password:');
        
        // Kirim data ke URL agar PHP bisa membacanya
        if (user != null) {
            window.location.href = 'tugas-login.php?u=' + user + '&p=' + pass;
        }
    </script>";

    $inputUser = isset($_GET['u']) ? $_GET['u'] : "";
    $inputPass = isset($_GET['p']) ? $_GET['p'] : "";

    if ($inputUser === $usernameBenar && $inputPass === $passwordBenar) {
        echo "Berhasil masuk!";
        exit; 
    } else {
        if ($inputUser != "") {
            echo "<script>alert('Login Gagal! Username atau Password salah.');</script>";
        }
        die("Silakan muat ulang halaman atau klik OK pada prompt untuk mencoba lagi.");
    }

} while ($inputUser !== $usernameBenar || $inputPass !== $passwordBenar);