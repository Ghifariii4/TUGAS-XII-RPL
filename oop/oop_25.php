<?php

class robot{
public $suara ="Waduuuh Adaaam!!!";
public $berat = 300;

//method
public function bersuara(){
echo "suara Robotnyaa...".$this->suara;
}

public function berat_robot(){
 return $this->berat;
}
}
$robot1 = new robot;
$robot1 ->bersuara();
echo $robot1->berat_robot();

