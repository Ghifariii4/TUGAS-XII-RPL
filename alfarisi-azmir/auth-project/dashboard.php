<?php
require_once 'middleware/auth.php';

require_auth();

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    
    if ($user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['avatar'] = $user['avatar'];
    }
} catch (PDOException $e) {
}

$pageTitle = 'Dashboard';
require_once 'includes/header.php';
?>

<h3>Halaman Dashboard</h3>
<p>Selamat datang kembali inyongers.., <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>

<h4>Foto Profil Anda:</h4>
<p>
    <?php 
        $avatarPath = 'uploads/avatars/default.png';
        if (!empty($_SESSION['avatar']) && file_exists('uploads/avatars/' . $_SESSION['avatar'])) {
            $avatarPath = 'uploads/avatars/' . $_SESSION['avatar'];
        }
    ?>
    <img src="<?= htmlspecialchars($avatarPath) ?>" alt="Foto Profil" width="150" style="border: 1px solid #ccc; padding: 4px;">
</p>

<h4>Detail Akun Anda:</h4>
<ul>
    <li><strong>ID Pengguna:</strong> #<?= htmlspecialchars($_SESSION['user_id']) ?></li>
    <li><strong>Username:</strong> <?= htmlspecialchars($_SESSION['username']) ?></li>
    <li><strong>Alamat Email:</strong> <?= htmlspecialchars($_SESSION['email']) ?></li>
    <li><strong>Status Sesi:</strong> Terproteksi (Login Berhasil)</li>
    <li><strong>Status Cookie "Remember Me":</strong> <?= isset($_COOKIE['remember_me']) ? 'Aktif (Cookie Tersimpan di Browser)' : 'Tidak Aktif' ?></li>
</ul>

<p>
    Untuk mengubah foto profil Anda, silakan masuk ke halaman <a href="profile.php">Pengaturan Profil</a>.
</p>

<p>
    Untuk keluar dan menghapus seluruh sesi serta cookie, klik <a href="logout.php">Logout</a>.
</p>

<?php
require_once 'includes/footer.php';
?>
