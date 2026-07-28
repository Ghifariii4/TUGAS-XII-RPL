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
    
$buku1 = new Book("Kitab Hacker", "6769", "Tersedia");
$buku2 = new Book("Prompt Engineering", "9696", "Tersedia");
$buku3 = new Book("Belajar PHP-in", "1234", "Dipinjam");

echo "<h1>Perpustakaan</h1>";

echo "<h3>Informasi Buku</h3>";
echo $buku1;
echo "<br><br>";
echo $buku2;
echo "<br><br>";
echo $buku3;