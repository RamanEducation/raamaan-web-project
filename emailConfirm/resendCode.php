<?php

if(isset($_COOKIE[session_name()])){
    if(isset($_GET["resend"])){
        if(session_status()==PHP_SESSION_NONE) {
            session_start();
        }
        $emailCode=rand(100000,1000000);
        $_SESSION["emailCode"]=$emailCode;
        $text="your email code is $emailCode";
        mail($_SESSION["email"],"email confirmation code",$text);
        setcookie(session_name(),session_id(),time()+300,"/");
    }
}


