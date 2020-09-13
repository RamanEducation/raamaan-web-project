<?php

if(isset($_COOKIE[session_name()])) {
    if(session_status()==PHP_SESSION_NONE) {
        session_start();
    }
    $difference=time()-$_SESSION["time"];
    if($difference>1800){
        session_destroy();
        setcookie(session_name(),session_id(),time()-7200,"/");
        header("location: ../register/Register.php?error=3");
    }else {
        $emailCode = $_SESSION["emailCode"];
        if ($emailCode == $_POST["emailCode"]) {
            header("location: ../loginPanel/addToDB.php");
        } else {
            $_SESSION["errors"]++;
            header("location: emailConfirmation.php?error=1");
        }
    }
}else{
    header("location: emailConfirmation.php?error=6");
}