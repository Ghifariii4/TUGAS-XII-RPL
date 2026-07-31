<?php

require_once 'pemain.php';

$pemain1 = new pemain();
$pemain2 = new pemain;

$pemain1->set_suara('Ngik Ngik Ngik Ah ');
$pemain1->set_suara('rawr Rawr Rawr Rahul');
echo "Bunyinya.. pemain 1 ".$pemain1->get_suara()."</br>";

$pemain2->set_suara('ninut ninnut ninut');
echo "Bunyinya.. pemain2 " .$pemain2->get_suara();