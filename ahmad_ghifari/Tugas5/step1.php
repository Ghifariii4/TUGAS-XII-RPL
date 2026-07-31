<?php
session_start();

$error = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    if (empty($nama) || empty($email) || empty($telepon)) {
        $error = "Semua field wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid!";
    } else {
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        $_SESSION['telepon'] = $telepon;

        header('Location: step2.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Langkah 1</title>
</head>
<body>
    <h1>Langkah 1: Data Diri</h1>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?php echo $_GET['error']; ?></p>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="step1.php" method="post">
        <label>Nama Lengkap: <input type="text" name="nama" value="<?php echo $_SESSION['nama'] ?? ''; ?>"></label><br><br>
        <label>Email: <input type="text" name="email" value="<?php echo $_SESSION['email'] ?? ''; ?>"></label><br><br>
        <label>Nomor Telepon: <input type="text" name="telepon" value="<?php echo $_SESSION['telepon'] ?? ''; ?>"></label><br><br>
        <input type="submit" name="submit" value="Lanjut ke Langkah 2">
    </form>
</body>
</html>
