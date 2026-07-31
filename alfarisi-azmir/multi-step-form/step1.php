<?php
session_start();

$error = '';
if (isset($_GET['error'])) {
    $error = htmlspecialchars($_GET['error']);
}

if (isset($_POST['next'])) {
    $nama = strip_tags(trim($_POST['nama']));
    $email = strip_tags(trim($_POST['email']));
    $telepon = strip_tags(trim($_POST['telepon']));

    if (empty($nama) || empty($email) || empty($telepon)) {
        $error = "Semua field wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email harus valid!";
    } else {
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        $_SESSION['telepon'] = $telepon;
        header("Location: step2.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Langkah 1: Data Diri</title>
</head>
<body>
    <h2>Langkah 1: Data Diri</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="step1.php" method="POST">
        Nama Lengkap: <input type="text" name="nama" value="<?php echo isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama']) : ''; ?>"><br><br>
        Email: <input type="text" name="email" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>"><br><br>
        Nomor Telepon: <input type="text" name="telepon" value="<?php echo isset($_SESSION['telepon']) ? htmlspecialchars($_SESSION['telepon']) : ''; ?>"><br><br>
        <button type="submit" name="next">Lanjut ke Langkah 2</button>
    </form>
</body>
</html>
<!-- alfarisi azmir -->
