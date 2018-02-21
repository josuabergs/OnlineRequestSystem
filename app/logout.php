<?php
    if(!isset($_SESSION["username"])) {
        header("Location: ../login");
    } else {
        header("Location: ../index");
    }

    session_start();
    include("config.php");
    include("logs.php");
    Logs::save($_SESSION["username"], "Logged out");
    session_destroy();
?>