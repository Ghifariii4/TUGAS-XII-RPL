<?php

class Book {
    public $buku;
    public $kode;
    public $status;
    
    public function __construct($buku, $kode, $status) {
        $this->buku = $buku;
        $this->kode = $kode;
        $this->status = $status;
    }

    public function __toString() {
        return "Buku: " . $this->buku . "</br> " . "kode: " . $this->kode . "</br> " . "status: " . $this->status;
    }
}
    
$buku1 = new Book("cara mengumpulkan nyali untuk beristri empat", "1000", "Tersedia");
$buku2 = new Book("cara memancing orangtuamu agar membelikan motor", "2000", "Tersedia");
$buku3 = new Book("cara menjadi promter enggineer yang hebat tanpa slop", "3000", "Dipinjam");

echo "<h1>Perpustakaan mantap jiwa</h1>";

echo "<h3>Informasi Buku</h3>";
echo $buku1;
echo "<br><br>";
echo $buku2;
echo "<br><br>";
echo $buku3;
/* alfarisi azmir */
