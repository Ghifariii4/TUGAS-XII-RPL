<?php
require_once 'RobotHewan.php';

$robotKucing = new RobotHewan();

$robotKucing->setSuara("Meong");

echo $robotKucing->getSuara();