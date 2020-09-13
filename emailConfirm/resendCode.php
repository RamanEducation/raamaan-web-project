<?php

if(isset($_COOKIE[session_name()])){
    if(isset($_GET["resend"])) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $difference = time() - $_SESSION["time"];
        if ($difference > 1800) {
            session_destroy();
            setcookie(session_name(), session_id(), time() - 1800, "/");
            header("location: ../register/Register.php?error=3");
        } else {
            $emailCode = rand(100000, 1000000);
            $_SESSION["emailCode"] = $emailCode;
            $text = "your email code is $emailCode";
            mail($_SESSION["email"], "email confirmation code", $text);
            $_SESSION["time"] = time();
        }
    }
}


