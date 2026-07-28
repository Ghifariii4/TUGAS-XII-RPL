<?php

$user = 'alfarisi';
$password = '123';

if (isset($_POST['submit']) ){

    if( $_POST['nama'] == $user &&
        $_POST['password'] == $password){

        setcookie('nama', $_POST['nama'], time()+120);


        header('Location: profilecookie.php?nama=' . $user);


    }else{
        echo 'login gagal!';
    }
}

?> 

<form action="cookie.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>
<!-- alfarisi azmir -->
