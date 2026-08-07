<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_me'])) {
    $cookie_value = $_COOKIE['remember_me'];
    $parts = explode(':', $cookie_value, 2);

    if (count($parts) === 2) {
        $selector = $parts[0];
        $validator = $parts[1];

        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE remember_selector = ? LIMIT 1");
            $stmt->execute([$selector]);
            $user = $stmt->fetch();

            if ($user) {
                $validator_hash = hash('sha256', $validator);

                if (hash_equals($user['remember_token'], $validator_hash)) {
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['avatar'] = $user['avatar'];
                } else {
                    clear_remember_me_cookie($pdo, $user['id']);
                }
            } else {
                clear_cookie();
            }
        } catch (PDOException $e) {
        }
    }
}

function require_auth() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }
}

function require_guest() {
    if (isset($_SESSION['user_id'])) {
        header('Location: dashboard.php');
        exit;
    }
}

function clear_cookie() {
    if (isset($_COOKIE['remember_me'])) {
        setcookie('remember_me', '', time() - 3600, '/', '', isset($_SERVER['HTTPS']), true);
    }
}

function clear_remember_me_cookie($pdo, $user_id) {
    clear_cookie();
    try {
        $stmt = $pdo->prepare("UPDATE users SET remember_selector = NULL, remember_token = NULL WHERE id = ?");
        $stmt->execute([$user_id]);
    } catch (PDOException $e) {
    }
}
