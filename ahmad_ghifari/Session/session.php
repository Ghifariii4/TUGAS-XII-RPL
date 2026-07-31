<?php
session_start();

if (isset($_SESSION['nama_user'])) {
    header('Location: profile.php');
    exit();
}

$user = "Ghifari";
$password = "6767";
$error = "";

if (isset($_POST['submit'])) {
    if ($_POST['nama'] == $user && $_POST['password'] == $password) {
        $_SESSION['nama_user'] = $_POST['nama'];
        header('Location: profile.php');
        exit();
    } else {
        $error = 'Login Gagal!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="session.php" method="post">
        <label>Nama: <input type="text" name="nama" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

