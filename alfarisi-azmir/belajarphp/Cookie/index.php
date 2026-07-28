<?php
if (isset($_GET['reset'])) {
    setcookie('theme', '', time() - 3600, "/");
    setcookie('lang', '', time() - 3600, "/");
    setcookie('history', '', time() - 3600, "/");
    header("Location: index.php");
    exit;
}

if (isset($_POST['save'])) {
    setcookie('theme', $_POST['theme'], time() + (30 * 86400), "/");
    setcookie('lang', $_POST['lang'], time() + (30 * 86400), "/");
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $history = isset($_COOKIE['history']) ? json_decode($_COOKIE['history'], true) : [];
    $history = array_diff($history, [$id]);
    array_unshift($history, $id);
    if (count($history) > 5) array_pop($history);
    setcookie('history', json_encode($history), time() + (7 * 86400), "/");
    header("Location: index.php");
    exit;
}

$theme = $_COOKIE['theme'] ?? 'Light';
$lang = $_COOKIE['lang'] ?? 'id';
$history = isset($_COOKIE['history']) ? json_decode($_COOKIE['history'], true) : [];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <style>
        body { background: <?= $theme == 'Dark' ? '#222' : '#fff' ?>; color: <?= $theme == 'Dark' ? '#fff' : '#000' ?>; font-family: sans-serif; padding: 20px; }
    </style>
</head>
<body>
    <h2>Pengaturan</h2>
    <form method="POST">
        Mode: 
        <select name="theme">
            <option <?= $theme=='Light'?'selected':'' ?>>Light</option>
            <option <?= $theme=='Dark'?'selected':'' ?>>Dark</option>
        </select>
        Bahasa: 
        <select name="lang">
            <option value="id" <?= $lang=='id'?'selected':'' ?>>id</option>
            <option value="en" <?= $lang=='en'?'selected':'' ?>>en</option>
        </select>
        <button type="submit" name="save">Simpan</button>
    </form>

    <h2>Produk</h2>
    <a href="index.php?id=101">Produk 101</a> | 
    <a href="index.php?id=102">Produk 102</a> | 
    <a href="index.php?id=103">Produk 103</a>

    <h2>Terakhir Dilihat</h2>
    <ul>
        <?php foreach ($history as $id): ?>
            <li>ID: <?= $id ?></li>
        <?php endforeach; ?>
    </ul>

    <br><a href="index.php?reset=true"><button>Reset Activity</button></a>
</body>
</html>
<!-- alfarisi azmir -->
