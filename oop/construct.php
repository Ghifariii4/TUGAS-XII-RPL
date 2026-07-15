<?php

require_once 'robot.php';

class ronaldo extends robot{
    public function tampilkan(){
        echo "Suara.. ".$this->suara . "</br>";
        echo "beratnya..".$this->berat . "br </br>";
    }
}



// $robot1 = new robot();
// $robot2 = new robot;

// $robot1->set_suara('Ngik Ngik Ngik Ah ');
// $robot1->set_suara('rawr Rawr Rawr Rahul');
// echo "Bunyinya.. ".$robot1->get_suara()."</br>";

// $robot2->set_suara('ninut ninnut ninut');
// echo "Bunyinya.. " .$robot2->get_suara();