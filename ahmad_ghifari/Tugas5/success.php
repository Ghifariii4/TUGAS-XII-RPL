<?php
session_start();

$pesan = $_SESSION['pesan_sukses'] ?? 'Sukses!';
unset($_SESSION['pesan_sukses']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sukses</title>
</head>
<body>
    <h1>Berhasil!</h1>
    <p style="color: green;"><?php echo $pesan; ?></p>
    <a href="step1.php">Kembali ke Langkah 1</a>
</body>
</html>
