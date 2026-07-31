<?php
session_start();

if (!isset($_SESSION['nama_user'])) {
    header('Location: session.php');
    exit();
}

echo "<h1>Selamat Datang, " . htmlspecialchars($_SESSION['nama_user']) . "</h1>";
?>

<a href="logout.php">
    <button type="button">Logout</button>
</a>
