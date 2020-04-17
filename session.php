<?php
    session_start();
    
    $allow_url = ['/Tinder2/login.php','/Tinder2/login_check.php','/Tinder2/registration.php','/Tinder2/user_insert.php'];

    if( !isset($_SESSION['user_id']) && !in_array($_SERVER['REQUEST_URI'],$allow_url) ){
        header("Location: login.php");
        die();
    }
    
?>