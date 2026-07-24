<?php
if (isset($_GET['nama']) && isset($_GET['password'])) {
    echo $_GET['password']; 
}
?>
<span>ini adalah halaman get.php</span>
<form action="index.php" method="get">
    <p>masukan nama <input type="text" name="nama"></p>
    <p>masukan password <input type="password" name="password"></p>
    <input type="submit" value="kirim">

<a href="index.php">Kembali ke halaman utama</a>
</form>
