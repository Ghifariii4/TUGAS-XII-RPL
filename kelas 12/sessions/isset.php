<?php

session_start();

if(isset($_SESSION['username'])){
    echo "Selamat datang kembali, " . htmlspecialchars($_SESSION['username']) ;
} else {
    echo "silahkan login terlebih dahulu";
}
?>