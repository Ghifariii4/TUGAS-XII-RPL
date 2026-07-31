<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header('Location: step1.php?error=Isi Langkah 1 Terlebih Dahulu!');
    exit();
}

$error = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['tiket'])) {
        $error = "Pilih tipe tiket!";
    } else {
        $_SESSION['tiket'] = $_POST['tiket'];
        $_SESSION['workshop'] = $_POST['workshop'] ?? [];

        header('Location: step3.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Langkah 2</title>
</head>
<body>
    <h1>Langkah 2: Pilih Tiket & Workshop</h1>

    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="step2.php" method="post">
        <p>Tipe Tiket:</p>
        <label><input type="radio" name="tiket" value="Regular" checked> Regular</label><br>
        <label><input type="radio" name="tiket" value="VIP"> VIP</label><br><br>

        <p>Pilih Workshop:</p>
        <label><input type="checkbox" name="workshop[]" value="PHP Security"> PHP Security</label><br>
        <label><input type="checkbox" name="workshop[]" value="Laravel Masterclass"> Laravel Masterclass</label><br>
        <label><input type="checkbox" name="workshop[]" value="Database Optimization"> Database Optimization</label><br><br>

        <input type="submit" name="submit" value="Lanjut ke Langkah 3">
    </form>
</body>
</html>
