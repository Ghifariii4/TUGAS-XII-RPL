<?php
require_once 'pembayaran.php';
require_once 'TransferBank.php';
require_once 'EWallet.php';

//bayar

echo "<h3>Transaksi 1:</h3?>";
$trasaksiBank = new TransferBank(1000000, "123-456-7890");
$trasaksiBank->tampilkanNota();
$trasaksiBank->prosesTransaksi();

echo "<h3>Transaksi 2:</h3?>";
$transaksiEWallet = new EWallet(500000, "081234567890");
$transaksiEWallet->tampilkanNota();
$transaksiEWallet->prosesTransaksi();