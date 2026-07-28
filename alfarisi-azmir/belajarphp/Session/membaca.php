<?php

if (isset($_SESSION['username'])) {
    echo "Selamat datang kembali synggg, " . htmlspecialchars($_SESSION['username']);
} else {
    echo "makanya login dulu mas. ";
}
/* alfarisi azmir */
?>
