<?php
if(isset($_COOKIE[session_name()])) {
    if(session_status()==PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_GET["error"])) {
        if ($_GET["error"] == 1 && $_SESSION["errors"] < 3) {
            echo "کد ارسال شده نامعتبر است!";
        }
        if ($_GET["error"] == 1 && $_SESSION["errors"] > 2) {
            echo "کاربر گرامی مجددا اقدام به ثبت نام کنید!";
            if(isset($_COOKIE[session_name()])) {
                setcookie(session_name(),"",time()-3600,"/");
                session_destroy();
                header("location: ../register/Register.php?error=3");
            }
        }
    }
}else{
    if(isset($_GET["error"])) {
        echo "کاربر گرامی مجددا اقدام به ثبت نام کنید!";
        header("location: ../register/Register.php?error=3");
    }
}