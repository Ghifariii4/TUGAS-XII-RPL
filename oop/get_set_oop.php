<?php
class robot {
    public $suara ;
    public $berat ;

    
public function set_suara ($suara){
    $this->suara = $suara;
}

public function get_suara(){
return $this->suara;
}
}

$robot1 = new robot;
$robot1->set_suara('Ngik Ngik Ngok ');
echo "bunyinya " .$robot1->get_suara();
