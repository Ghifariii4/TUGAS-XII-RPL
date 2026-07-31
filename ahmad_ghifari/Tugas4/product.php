<?php
require 'cookie.php';

$id = $_GET['id'] ?? '';
if ($id) {
    if (!in_array($id, $history)) {
        $history[] = $id;
        setcookie('history', implode(',', $history), time() + (30 * 86400), "/");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body style="background: <?= $theme == 'Dark' ? '#222' : '#fff' ?>; color: <?= $theme == 'Dark' ? '#fff' : '#000' ?>;">
    <h2>Detail Produk ID: <?= $id ?></h2>
    <a href="index.php">Kembali</a>
</body>
</html>
