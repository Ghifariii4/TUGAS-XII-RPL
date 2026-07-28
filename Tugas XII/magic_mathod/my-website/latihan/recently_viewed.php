<?php
function addToRecentlyViewed($productId) {
    // Ambil daftar produk yang sudah tersimpan sebelumnya (jika ada)
    $recentItems = isset($_COOKIE['recently_viewed']) ? json_decode($_COOKIE['recently_viewed'], true) : [];

    // Jika produk sudah ada di daftar, hapus dulu agar bisa ditaruh di posisi paling baru
    if (($key = array_search($productId, $recentItems)) !== false) {
        unset($recentItems[$key]);
    }

    // Tambahkan ID produk baru ke barisan paling depan
    array_unshift($recentItems, $productId);

    // Batasi riwayat riwayat (misalnya maksimal 5 produk terakhir saja)
    $recentItems = array_slice($recentItems, 0, 5);

    // Simpan kembali array ke cookie dalam bentuk string JSON (durasi sementara/sesi)
    setcookie('recently_viewed', json_encode($recentItems), time() + (7 * 24 * 60 * 60), "/");
}
