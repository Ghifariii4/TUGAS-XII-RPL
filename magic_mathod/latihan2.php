<?php

class Buku
{
    public $judul;
    public $kode;
 
    public function __construct($judul, $kode)
    {
        $this->judul = $judul;
        $this->kode = $kode;
    }

    public function __toString()
    {
        return "Ini adalah buku {$this->judul} dengan kode {$this->kode}.";
    }
}

$buku1 = new Buku("Matematika", "B001");
$buku2 = new Buku("Bahasa Indonesia", "B002");
$buku3 = new Buku("IPA", "B003");

echo $buku1 . "<br>";
echo $buku2 . "<br>";
echo $buku3;
?>