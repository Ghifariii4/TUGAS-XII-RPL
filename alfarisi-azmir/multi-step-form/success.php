<?php
session_start();

$message = '';
if (isset($_SESSION['flash_success'])) {
    $message = $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Sukses</title>
</head>
<body>
    <h2>Pendaftaran Sukses</h2>
    <?php if (!empty($message)): ?>
        <p style="color: green; font-weight: bold;"><?php echo htmlspecialchars($message); ?></p>
    <?php else: ?>
        <p>Tidak ada pendaftaran baru.</p>
    <?php endif; ?>

    <br>
    <a href="step1.php">Kembali ke Formulir Utama</a>
</body>
</html>
<!-- alfarisi azmir -->
