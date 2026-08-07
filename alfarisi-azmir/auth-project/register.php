<?php
require_once 'middleware/auth.php';

require_guest();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

    if ($username === '' || $email === '' || $password === '' || $konfirmasi_password === '') {
        $error = 'isi semua woi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email g valid.';
    } elseif (strlen($password) < 8) {
        $error = 'pw minimal harus 8 karakter.';
    } elseif ($password !== $konfirmasi_password) {
        $error = 'pw g cocok.';
    } else {
        try {
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
            $stmt->execute([$email]);
            
            if ($stmt->fetch()) {
                $error = 'emailnya udh ke daftar di db mas';
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$username, $email, $hashedPassword]);

                $success = 'anjay bs.. otw dahsboard ni.';
                
                header("refresh:2;url=login.php");
            }
        } catch (PDOException $e) {
            $error = 'konek db gagal.';
        }
    }
}

$pageTitle = 'Pendaftaran';
require_once 'includes/header.php';
?>

<h3>Daftar mas</h3>
<p>isi buat daftar akun baru</p>

<?php if ($error): ?>
    <p style="color: red; font-weight: bold;">[Error] <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($success): ?>
    <p style="color: green; font-weight: bold;">[Sukses] <?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<form method="POST" action="register.php">
    
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username" 
           value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>" required>
    <br><br>

    <label for="email">Alamat Email:</label><br>
    <input type="email" name="email" id="email" 
           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
    <br><br>

    <label for="password">pw minimal 8 karakter:</label><br>
    <input type="password" name="password" id="password" required>
    <br><br>

    <label for="konfirmasi_password">Konfirmasi Password:</label><br>
    <input type="password" name="konfirmasi_password" id="konfirmasi_password" required>
    <br><br>

    <button type="submit">Daftar mas</button>
</form>

<p>Sudah memiliki akun? <a href="login.php">Masuk di sini</a></p>

<?php
require_once 'includes/footer.php';
?>