<?php
class User  {
    public $name;
    public $usia;

    public function __construct($name, $usia) {
        $this->name = $name;
        $this->usia = $usia;
    }

    public function __toString() {
        return "Username: " . $this->name . ", Usia: " . $this->usia;
    }
}

$user = new User("Alice", 25);

$usia = new User("Junior", 67);

echo $usia . "</br>" . $user;

