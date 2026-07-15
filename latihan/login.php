<?php
$user = "admin";
$pass = "12345";
$status = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $user && $password === $pass) {
        echo "<h3>Login Berhasil!</h3>";
        $status = true;
    } else {
        echo "<p style='color:red;'>Username atau Password salah</p>";
    }
}

if (!$status) {
?>
<form method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>
<?php } ?>
