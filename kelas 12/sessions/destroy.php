<?php

session_start();

//menghapus item tertentu dari session
unset($_SESSION['role']);

//menghapus semua item dari session
$_SESSION = array(); //mengosongkan array session

if(ini_set('session.use_cookies')){
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time()  - 42000,
    $params['path'], $params['domain'],
    $params['secure'], $params['httponly']
    );
}
session_destroy();
?>

