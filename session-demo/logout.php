<?php 
    session_start();
    session_destroy();
    header("location: static-login.php");
?>