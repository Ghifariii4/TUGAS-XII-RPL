<?php
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'Light';
$lang  = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'id';

// Cek apakah ada perubahan preferensi dari user (misal lewat form/URL)
if (isset($_GET['set_theme'])) {
    $theme = $_GET['set_theme'] === 'Dark' ? 'Dark' : 'Light';
    setcookie('theme', $theme, time() + (30 * 24 * 60 * 60), "/"); // 30 hari
}

if (isset($_GET['set_lang'])) {
    $lang = $_GET['set_lang'] === 'en' ? 'en' : 'id';
    setcookie('lang', $lang, time() + (30 * 24 * 60 * 60), "/"); // 30 hari
}
