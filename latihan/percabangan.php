<?php 

$nilai = 95;
$kkm = 80;
if ($nilai > $kkm+10){
    echo 'Selamat,Anda Mendapat Predikat A';
} elseif ($nilai > $kkm+5){
     echo 'Selamat,Anda Mendapat Predikat B';
 } elseif ($nilai > $kkm){
     echo 'Selamat,Anda Mendapat Predikat C';
} elseif ($nilai==$kkm){
     echo 'Yah, nilai pas kkm';
} else
    echo 'Anda Ga lulus';

