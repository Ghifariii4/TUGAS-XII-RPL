<?php
require_once 'robot.php';

class RobotHewan extends Robot {

    
    public function getSuara() {
        return "Suaranya adalah: " . $this->suara;
    }
}
