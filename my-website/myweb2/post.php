<?php

$user = "hilman";
$password = "12345";

if (isset($_POST['submit'])) {
    if ($_POST['nama']  == $user &&
        $_POST['password'] == $password) {
       
        header("Location: profile.php?nama=$user&password=$password");
        exit;
    }else {
        echo "nama atau password salah";
    }
}

?>

<form action="" method="post">
    <p>masukan nama <input type="text" name="nama"></p>
    <p>masukan password <input type="password" name="password"></p>
    <input type="submit" name="submit" value="kirim">
</form>
<a href="../index.php">Kembali ke Website Utama</a>
