<?php
require_once 'middleware/auth.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    try {
        $stmt = $pdo->prepare("UPDATE users SET remember_selector = NULL, remember_token = NULL WHERE id = ?");
        $stmt->execute([$user_id]);
    } catch (PDOException $e) {
    }
}

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

if (isset($_COOKIE['remember_me'])) {
    setcookie('remember_me', '', time() - 3600, '/', '', isset($_SERVER['HTTPS']), true);
}

header("Location: login.php");
exit;
