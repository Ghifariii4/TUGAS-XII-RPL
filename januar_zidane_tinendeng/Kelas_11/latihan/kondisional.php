<?php
//cek suhu
$suhu = 36.5;
if ($suhu > 36){
    echo 'Kamu Perlu Rehat';
} elseif ($suhu == 35){
    echo 'Ga boleh Masuk';
}
else {
    echo 'Silahkan Masuk';  
}
