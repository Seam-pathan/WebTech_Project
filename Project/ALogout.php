<?php
    Session_start();

    session_unset();

    session_destroy();

    header("Location: ALogin.php");


?>