<?php
$user = "hilman";
$password = "12345";

if (isset($_GET['nama']) && isset($_GET['password'])) {
    if ($_GET['nama'] == $user && $_GET['password'] == $password) {
        header("Location: profile.php?nama=$user&password=$password");
        exit;
    } else {
        echo "<p style='color:red;'>nama atau password salah</p>";
    }
}
?>
<span>ini adalah halaman get.php</span>
<form action="" method="get">
    <p>masukan nama <input type="text" name="nama"></p>
    <p>masukan password <input type="password" name="password"></p>
    <input type="submit" value="kirim">

<a href="index.php">Kembali ke halaman utama myweb2</a>
<a href="../index.php">Kembali ke Website Utama</a>
</form>
