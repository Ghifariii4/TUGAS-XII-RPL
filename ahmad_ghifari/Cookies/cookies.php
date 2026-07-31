<?php

$user = 'hilman';

$password  = '123';

if ( isset($_POST['submit'])) {

    if($_POST['nama'] == $user &&
       $_POST['password'] == $password) {

       setcookie('nama_user', $_POST['nama'], time() + 120);

       header('Location: profile.php?nama=' . $user);

    } else {

        echo "Login Gagal";
    }
}
?>

<form action="cookies.php" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="password" name="password" placeholder="Masukkan Password">
    <input type="submit" name="submit" value="Login">
</form>
