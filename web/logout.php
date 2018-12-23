<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
$_SESSION['message']="you are";
header("Location: /book1/guest_homepage/guest_homepage.php");
?>
