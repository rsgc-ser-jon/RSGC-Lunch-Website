<?php
    // Begin the session
    session_start();
                                                                                                                           
    // Unset all of the session variables.
    session_unset();
    
    // Destroy the session.
    session_destroy();    
    
    // Now re-direct to main index page.
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: https://lunches-official-rsgc-kelly-c.c9users.io/lunches/login.php");
    exit;
?>