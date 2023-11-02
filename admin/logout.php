<?php
    session_start();
    unset($_SESSION['sonnu']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    header('location: login.php')
?>