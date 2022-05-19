<?php

    session_start(); //initialiser la session
    session_unset(); //desactiver la session
    session_destroy(); // détruit la session
    setcookie('auth','', time()-1, '/', null, false, true); // détruit le cookie

    header('location: index.php');
    exit();

?>