<?php

Abstract class Pembayaran
{
    Protected $totalBayar;

    public function __construct($totalBayar)
    {
        $this->totalBayar = $totalBayar;
    }

   public function tampilkanNota()
    {
        echo "Total yang harus dibayar: Rp. " . number_format($this->totalBayar, 0, ',', '.') ."<br>";
    }

    //abstrat method
    abstract public function ProsesTransaksi();
}