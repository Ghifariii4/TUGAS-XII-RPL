<?php

require_once 'Pembayaran.php';
require_once 'Ewallet.php';
require_once 'TransferBank.php';

echo "<h3>Transaksi 1:</h3>";
$transfer = new TransferBank(150000, "123-456-7890");
$transfer->tampilkanNota();
$transfer->prosesTransaksi();

echo "<hr><h3>Transaksi 2:</h3>";
$ewallet = new Ewallet(100000, "081234567890");
$ewallet->tampilkanNota();
$ewallet->prosesTransaksi();