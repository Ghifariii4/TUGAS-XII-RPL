<?php

class pemain {
    public $suara;
    public $berat;


public function _construct(){
echo "Halo pemain...";
}

public function set_suara($suara){
    $this->suara = $suara;
}

public function get_suara(){
    return $this->suara;
}
}