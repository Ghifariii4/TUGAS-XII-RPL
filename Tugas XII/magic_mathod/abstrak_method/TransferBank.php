<?php

class TransferBank extends Pembayaran{
    private $nomorRekening;

    public function __construct($total, $norek){
        parent::__construct($total);
        $this->nomorRekening = $norek;
    }

    public function prosesTransaksi(){
        echo "Mengirimkan intruksi trasfer ke bank dengan nomor rekening: " . $this->nomorRekening . "<br>";    
        echo "status: Menunggu Transfer Bank Sebesar RP: " . number_format($this->totalBayar, 0, ',', '.') . "<br>";
    }
}