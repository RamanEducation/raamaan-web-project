<?php
//for validating that user is logged in or not!
if(session_status()==PHP_SESSION_NONE) {
    session_start();
}
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]==1){}
    else{
        session_destroy();
        header("location: ../../Pages/loginPanel/login.php");
    }




