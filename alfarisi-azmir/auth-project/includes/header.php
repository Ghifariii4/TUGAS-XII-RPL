<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - Belajar PHP' : 'Project Autenentikasi Pak Farauk' ?></title>
</head>
<body>

    <h2>SELAMAT DATANG DI INYONG FAMALI</h2>

    <nav>
        <a href="index.php">Beranda</a> |
        <?php if ($isLoggedIn): ?>
            <a href="dashboard.php">Dashboard</a> |
            <a href="profile.php">coba up avatar</a> |
            <a href="logout.php">Logout</a> 
            &nbsp; [ Pengguna aktif: <strong><?= htmlspecialchars($_SESSION['username']) ?></strong> ]
        <?php else: ?>
            <a href="login.php">Login</a> |
            <a href="register.php">Daftar Akun Dulu Mas</a>
        <?php endif; ?>
    </nav>
    <hr>
