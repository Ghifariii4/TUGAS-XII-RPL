<?php

function bilangHalo(){
    echo "Halo";
}

function bilangNama ($nama){
    echo "Halo, " . $nama . '|<br/>';
}

function tambah($a, $d){
    $total = $a + $d;
    echo $total;
}

bilangNama();