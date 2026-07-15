<?php

class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function __toString() {
        return "Nama Produk: $this->nama, Harga: $this->harga";
    }
}

//contoh
$gadget = new Produk("Smartphone", 5000000);

echo $gadget; // Output: Nama Produk: Smartphone, Harga: 5000000
