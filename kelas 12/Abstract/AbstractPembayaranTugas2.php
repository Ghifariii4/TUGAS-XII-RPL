<?php

abstract class Pembayaran {
    protected $totalBayar;

    public function __construct($total) {
        $this->totalBayar = $total;
    }

    public function tampilkanNota() {
        echo "Total yang harus dibayar: Rp " . number_format($this->totalBayar, 0, ',', '.') . "<br>";
    }

    abstract public function ProsesTransaksi(); //Lanjut AbstractTransferBank.php
}