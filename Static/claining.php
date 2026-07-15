<?php

class Mahasiswa
{
    public function isiNama($nama)
    {
        echo "Nama: $nama <br>";
        return $this;
    }

    public function isiKelas($kelas)
    {
        echo "Kelas: $kelas <br>";
        return $this;
    }

    public function isiJurusan($jurusan)
    {
        echo "Jurusan: $jurusan <br>.<br>";
        return $this;
    }
}

$mhs = new Mahasiswa();

$mhs->isiNama("Renny")
    ->isiKelas("XI AKL 1")
    ->isiJurusan("Akutansi");


class RumahBaru
{
    private $totalHarga = 0;

    public function isiRuangTamu($ruang_tamu)
    {
        echo "Ruang Tamu terdapat: $ruang_tamu <br>";
        return $this;
    }

    public function hargaPerabotan($ac, $sofa, $tv)
    {
        echo "Harga AC: Rp " . number_format($ac, 0, ',', '.') . "<br>";
        echo "Harga Sofa: Rp " . number_format($sofa, 0, ',', '.') . "<br>";
        echo "Harga TV: Rp " . number_format($tv, 0, ',', '.') . "<br>";

        $this->totalHarga = $ac + $sofa + $tv;

        return $this;
    }

    public function total()
    {
        echo "Total Harga Perabotan: Rp " . number_format($this->totalHarga, 0, ',', '.');
        return $this;
    }
}

$rmh = new RumahBaru();

$rmh->isiRuangTamu("AC, Sofa, TV")
    ->hargaPerabotan(1500000, 3000000, 4000000)
    ->total();

?>