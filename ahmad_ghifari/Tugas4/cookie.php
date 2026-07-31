<?php
$theme = $_COOKIE['theme'] ?? 'Light';
$lang = $_COOKIE['lang'] ?? 'id';

if (isset($_POST['save'])) {
    setcookie('theme', $_POST['theme'], time() + (30 * 86400), "/");
    setcookie('lang', $_POST['lang'], time() + (30 * 86400), "/");
    header("Location: index.php");
    exit;
}

if (isset($_POST['clear'])) {
    setcookie('theme', '', time() - 3600, "/");
    setcookie('lang', '', time() - 3600, "/");
    setcookie('history', '', time() - 3600, "/");
    header("Location: index.php");
    exit;
}

$history = isset($_COOKIE['history']) ? explode(',', $_COOKIE['history']) : [];
