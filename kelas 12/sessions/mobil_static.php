<?php

class mobil {
    public static $jumlah_roda = 4;
    const JENIS = "kendaraan darat";

    public static function infomobil() {
        return "Jenis". self::JENIS ;
    }
}