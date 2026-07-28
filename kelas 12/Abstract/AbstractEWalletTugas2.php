<?php

class EWallet extends Pembayaran {
    private $nomorHp;
    
    public function __construct($total, $nHp) {
        parent::__construct($total);
        $this->nomorHp = $nHp;
    }

    public function prosesTransaksi() {
        echo "Menghubungkan ke e-wallet dengan nomor HP: " . $this->nomorHp . "<br>";
        echo "Status: Saldo e-wallet berhasil dipotong sebesar Rp " . number_format($this->totalBayar, 0, ',', '.') . "<br>";
    }
}

//Lanjut AbstractEksekusi.php