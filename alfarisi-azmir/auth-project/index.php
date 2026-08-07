<?php
require_once 'middleware/auth.php';

$pageTitle = 'Beranda';
require_once 'includes/header.php';
?>

<h3>cuma beranda</h3>

<?php if (isset($_SESSION['user_id'])): ?>
    <p>Anda sudah masuk sebagai <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>.</p>
    <p>Silakan menuju ke <a href="dashboard.php">Halaman Dashboard</a>.</p>
<?php else: ?>
    <p>coba login dulu mas</p>
    <ul>
        <li><a href="login.php">Login Mas</a></li>
        <li><a href="register.php">Daftar mas</a></li>
    </ul>
<?php endif; ?>

<?php
require_once 'includes/footer.php';
?>
