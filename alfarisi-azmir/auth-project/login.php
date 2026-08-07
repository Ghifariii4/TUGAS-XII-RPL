<?php
require_once 'middleware/auth.php';

require_guest();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember_me = isset($_POST['remember_me']);

    if ($email === '' || $password === '') {
        $error = 'Email dan password wajib diisi.';
    } else {
        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['avatar'] = $user['avatar'];

                if ($remember_me) {
                    $selector = bin2hex(random_bytes(16));
                    $validator = bin2hex(random_bytes(32));
                    
                    $validator_hash = hash('sha256', $validator);

                    $stmt = $pdo->prepare("UPDATE users SET remember_selector = ?, remember_token = ? WHERE id = ?");
                    $stmt->execute([$selector, $validator_hash, $user['id']]);

                    $cookie_value = $selector . ':' . $validator;
                    
                    setcookie('remember_me', $cookie_value, [
                        'expires' => time() + (30 * 24 * 60 * 60),
                        'path' => '/',
                        'domain' => '',
                        'secure' => isset($_SERVER['HTTPS']),
                        'httponly' => true,
                        'samesite' => 'Lax'
                    ]);
                }

                $success = 'Anjay bisaa... otw ke dashboard mas...';
                header("refresh:1.5;url=dashboard.php");
            } else {
                $error = 'Email atau password salah mek.';
            }
        } catch (PDOException $e) {
            $error = 'konek db gagal.';
        }
    }
}

$pageTitle = 'Login';
require_once 'includes/header.php';
?>

<h3>login</h3>
<p>TDCTF{VIVI_SAYANG_FARIS}</p>

<?php if ($error): ?>
    <p style="color: red; font-weight: bold;">[Error] <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($success): ?>
    <p style="color: green; font-weight: bold;">[Sukses] <?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<form method="POST" action="login.php">
    
    <label for="email">Alamat Email:</label><br>
    <input type="email" name="email" id="email" 
           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
    <br><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required>
    <br><br>

    <input type="checkbox" name="remember_me" id="remember_me">
    <label for="remember_me">Ingat Saya y</label>
    <br><br>

    <button type="submit">Masuk</button>
</form>

<p>Belum ad akun? <a href="register.php">Daftar mas</a></p>

<?php
require_once 'includes/footer.php';
?>
