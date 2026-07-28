<?php
require_once 'preferences.php';
require_once 'recently_viewed.php';

// Tangkap ID produk dari URL
$productId = isset($_GET['id']) ? $_GET['id'] : null;

if ($productId) {
    // Jalankan fungsi untuk mencatat aktivitas pengunjung
    addToRecentlyViewed($productId);
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <title>Detail Produk #<?php echo htmlspecialchars($productId); ?></title>
    <style>
        /* Terapkan mode tampilan berdasarkan cookie */
        body {
            background-color: <?php echo $theme === 'Dark' ? '#121212' : '#ffffff'; ?>;
            color: <?php echo $theme === 'Dark' ? '#ffffff' : '#000000'; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $lang === 'en' ? 'Product Detail' : 'Detail Produk'; ?></h1>
    <p>ID: <?php echo htmlspecialchars($productId); ?></p>

    <!-- Tombol ganti preferensi -->
    <hr>
    <a href="?id=<?php echo $productId; ?>&set_theme=<?php echo $theme === 'Light' ? 'Dark' : 'Light'; ?>">
        Ubah ke Mode <?php echo $theme === 'Light' ? 'Dark' : 'Light'; ?>
    </a> | 
    <a href="?id=<?php echo $productId; ?>&set_lang=<?php echo $lang === 'id' ? 'en' : 'id'; ?>">
        Change Language to <?php echo $lang === 'id' ? 'English' : 'Indonesia'; ?>
    </a>
</body>
</html>
