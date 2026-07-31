<?php require 'cookie.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tugas 4</title>
</head>
<body style="background: <?= $theme == 'Dark' ? '#222' : '#fff' ?>; color: <?= $theme == 'Dark' ? '#fff' : '#000' ?>;">
    <h2>Pengaturan</h2>
    <form method="post" action="">
        Mode:
        <select name="theme">
            <option value="Light" <?= $theme == 'Light' ? 'selected' : ''; ?>>Light</option>
            <option value="Dark" <?= $theme == 'Dark' ? 'selected' : ''; ?>>Dark</option>
        </select>
        Bahasa:
        <select name="lang">
            <option value="id" <?= $lang == 'id' ? 'selected' : ''; ?>>id</option>
            <option value="en" <?= $lang == 'en' ? 'selected' : ''; ?>>en</option>
        </select>
        <input type="submit" name="save" value="Simpan">
        <input type="submit" name="clear" value="Hapus Cookie">
    </form>

    <h2>Produk</h2>
    <a href="product.php?id=101">Produk 101</a> |
    <a href="product.php?id=102">Produk 102</a> |
    <a href="product.php?id=103">Produk 103</a>

    <h2>Terakhir Dilihat</h2>
    <ul>
        <?php foreach ($history as $id): ?>
            <li>Produk ID: <?= $id ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
