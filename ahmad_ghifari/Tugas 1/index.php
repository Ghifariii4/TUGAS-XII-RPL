<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Web Dinamis - <?php echo ucfirst($page); ?></title>
</head>
<body>
    <header>
        <h1>Sistem Web Dinamis</h1>
        <nav>
            <a href="index.php?page=home">Home</a> |
            <a href="index.php?page=about">About</a> |
            <a href="index.php?page=contact">Contact</a>
        </nav>
    </header>
    <hr>
    <main>
        <?php include($page . '.php'); ?>
    </main>
    <hr>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> WebDinamis. All rights reserved.</p>
    </footer>
</body>
</html>
