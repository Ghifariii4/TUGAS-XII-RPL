<?php

session_start();

if(isset($_POST['next']))
{
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telp'] = $_POST['telp'];

    header("Location: step2.php");
}
?>