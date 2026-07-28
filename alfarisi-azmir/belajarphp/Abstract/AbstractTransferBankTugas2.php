<?php

class TransferBank extends Pembayaran {
    private $nomorRekening;

    public function __construct($total, $noRek) {
        parent::__construct($total);
        $this->nomorRekening = $noRek;
    }

    public function prosesTransaksi() {
        echo "alawe ak Mengirimkan km transfer ke nomor ini nyak: " . $this->nomorRekening . "<br>";
        echo "Status: aku nunggu transfer bank sebesar Rp " . number_format($this->totalBayar, 0, ',', '.') . "<br>";
    }
}
/* alfarisi azmir */
