<?php

class karakter{
    public $nama ="Adam Ican Amerika";
    public $nyawa=100;
    public $kekuatan = "maam";

public function Getnama(){
  echo "Namanya adalah sang ".$this->nama."<br>";
}

public function Getnyawa(){
    return $this->nyawa."<br>";
}
public function GetKekuatan(){
    echo "kekuatannya Adalah ".$this->kekuatan."<br>";
}
}
$karakter1 = new karakter;
$karakter1 ->Getnama();

$karakter1->GetKekuatan();

echo "Nyawa: " . $karakter1->Getnyawa();
