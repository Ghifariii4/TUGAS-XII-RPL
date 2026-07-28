<?php

session_start();

unset($_SESSION['role']);

$_SESSION = array();

if (ini_get("session.use_cookie")) {
    $param = session_get_cookie_params();
    setcookie(session_name(), '', time() - 4200,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]    
    );
}

session_destroy();
/* alfarisi azmir */
?>
