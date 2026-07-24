<?php

if(isset($_POST['submit'])){
echo $_POST['password'];
}
?>
<form action="post2.php" method="get">
    <p>masukan nama <input type="text" name="nama"></p>
    <p>masukan password <input type="password" name="password"></p>
    <input type="submit" name="submit" value="kirim">
<a href="../index.php">Kembali ke Website Utama</a>
