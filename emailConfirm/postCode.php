<?php

if(isset($_COOKIE[session_name()])) {
    session_start();
    $emailCode = $_SESSION["emailCode"];
    echo $emailCode;
    if ($emailCode == $_POST["emailCode"]) {
        header("location: ../loginPanel/login.php");
    } else {
        $_SESSION["errors"]++;
        header("location: emailConfirmation.php?error=1");
    }
}else{
    header("location: emailConfirmation.php?error=6");
}