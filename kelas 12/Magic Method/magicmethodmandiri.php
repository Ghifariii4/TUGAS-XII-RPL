<?php   

class Produk {
    public $kode;
    public $nama;
    public $kategori;
    public $harga;
    public $stok;

    public function __construct ($kode, $nama, $kategori, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->stok = $stok;  
    }

    public function __toString(){
        return "Kode: " . $this->kode . "</br> " . "Nama: " . $this->nama . "</br> " . "Kategori: " . $this->kategori . "</br> " . "Harga: " . $this->harga . "</br> " . "Stok: " . $this->stok;
    }
}

$produk = new Produk("001", "Monitor", "Elektronik", 1200000, 100);
$produk2 = new Produk("002", "Keyboard", "Elektronik", 200000, 50);


echo "<h1>Informasi Produk</h1>";
echo $produk;
echo "<br><br>";
echo $produk2;