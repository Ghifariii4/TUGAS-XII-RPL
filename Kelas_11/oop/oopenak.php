<?php

class GameChara {
    public $name = "Ryugani";
    public $class = "Negromancer";
    public $skill = "Summon Free Food";
    public $hp = 100;

public function Getname(){
    echo "Thou Who Revive The World, ".$this->name."<br>";
    echo "Shall Be Blessed To Oath As ".$this->class."<br>";
}

public function Gethealth(){
    return $this->health."<br>";
}

public function Spellskill(){
    echo this->name."Has Use These Skill : ".$this->kekuatan."<br>";
}
}

$character1 = new character;
$character1 ->Getname();

$character1->Spellskill();

echo "Health: " . $karakter1->Gethealth();
