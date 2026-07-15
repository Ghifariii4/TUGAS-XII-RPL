<?php

class laptop {
    
    public $merk = "ASUS";
    public $Warna  = "Silver";
}

$laptop1 = new laptop;
echo "Mereknya adalah " . $laptop1->merk . ', warnanya ' . $laptop1->Warna;

?>