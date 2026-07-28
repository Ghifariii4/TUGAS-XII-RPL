<?php

if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);
    echo "<h2>Selamat datang, $nama!</h2>";
    echo "<p>Senang melihat Anda kembali.</p>";
} else {
    echo "<p>Silakan <a href='post.php'>login</a> terlebih dahulu.</p>";
}

?>

<a href="../index.php">Kembali ke Website Utama</a>
