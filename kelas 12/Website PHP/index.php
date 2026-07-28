<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Dinamis</title>

</head>
<body>

    <header>
        <h1>Website Saya</h1>
    </header>

    <nav>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=about">About</a>
        <a href="index.php?page=contact">Contact</a>
    </nav>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $file = "pages/" . $page . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            echo "<h2>404 Halaman Tidak Ditemukan</h2>";
            echo "<p>Maaf, halaman yang Anda cari tidak tersedia.</p>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2026 Website Dinamis. All rights reserved.</p>
    </footer>
</body>
</html>