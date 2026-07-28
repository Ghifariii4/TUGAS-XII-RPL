<?php

class EWallet extends Pembayaran{
    private $nomorHP;

    public function __construct($total, $noHP){
        parent::__construct($total);
        $this->nomorHP = $noHP;
    }

    public function prosesTransaksi(){
        echo "menghubungkan ke EWallet dengan nomor HP: " . $this->nomorHP . "<br>";
        echo "status: Saldo e-Wallet Berhasil dipotong sebesar RP: " . number_format($this->totalBayar,0, ',', '.') . "<br>";
    }
}