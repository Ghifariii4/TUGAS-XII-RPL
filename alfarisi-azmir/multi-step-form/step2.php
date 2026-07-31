<?php
session_start();

// Guard Check
if (!isset($_SESSION['nama']) || !isset($_SESSION['email']) || !isset($_SESSION['telepon'])) {
    header("Location: step1.php?error=Silakan isi data diri terlebih dahulu!");
    exit();
}

$error = '';

if (isset($_POST['next'])) {
    $tiket = isset($_POST['tiket']) ? $_POST['tiket'] : '';
    $workshop = isset($_POST['workshop']) ? $_POST['workshop'] : [];

    if (empty($tiket)) {
        $error = "Silakan pilih tipe tiket!";
    } else {
        $_SESSION['tiket'] = $tiket;
        $_SESSION['workshop'] = $workshop;
        header("Location: step3.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Langkah 2: Pilih Tiket & Workshop</title>
</head>
<body>
    <h2>Langkah 2: Pilih Tiket & Workshop</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="step2.php" method="POST">
        <h3>Tipe Tiket:</h3>
        <input type="radio" name="tiket" value="Regular" <?php echo (isset($_SESSION['tiket']) && $_SESSION['tiket'] === 'Regular') ? 'checked' : ''; ?>> Regular<br>
        <input type="radio" name="tiket" value="VIP" <?php echo (isset($_SESSION['tiket']) && $_SESSION['tiket'] === 'VIP') ? 'checked' : ''; ?>> VIP<br><br>

        <h3>Pilih Workshop:</h3>
        <input type="checkbox" name="workshop[]" value="PHP Security" <?php echo (isset($_SESSION['workshop']) && in_array('PHP Security', $_SESSION['workshop'])) ? 'checked' : ''; ?>> PHP Security<br>
        <input type="checkbox" name="workshop[]" value="Laravel Masterclass" <?php echo (isset($_SESSION['workshop']) && in_array('Laravel Masterclass', $_SESSION['workshop'])) ? 'checked' : ''; ?>> Laravel Masterclass<br>
        <input type="checkbox" name="workshop[]" value="Database Optimization" <?php echo (isset($_SESSION['workshop']) && in_array('Database Optimization', $_SESSION['workshop'])) ? 'checked' : ''; ?>> Database Optimization<br><br>

        <a href="step1.php">Kembali</a> | 
        <button type="submit" name="next">Lanjut ke Langkah 3</button>
    </form>
</body>
</html>
<!-- alfarisi azmir -->
