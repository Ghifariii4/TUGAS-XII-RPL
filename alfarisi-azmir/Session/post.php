<?php

session_start();

$user = 'faris';
$password = "123";

if (isset($_POST['submit'])){

    if ($_POST['nama'] == $user && $_POST['password'] == $password){
        $_SESSION['username'] = $user;

        header('Location: profile.php');
    }else {
        echo "Login gagal";
    }
}

?>
<form action="post.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>
/* alfarisi azmir */
