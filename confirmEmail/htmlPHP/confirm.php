<?php
session_start();
define("bigStr","ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789");
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$emailCode="";
for($i=0 ;$i<20;$i++) {
    $j=rand(0,61);
    $emailCode.=bigStr[$j];
}

$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
$_SESSION["email"]=$email;
$_SESSION["firstName"]=$firstName;
$_SESSION["lastName"]=$lastName;
$_SESSION["emailCode"]=$emailCode;


?>

<html dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>تایید ایمیل</title>
        <link rel="stylesheet" type="text/css" href="../css/passConfStyle.css">
        <script src="../js/passConfScript.js"></script>
    </head>
    <body>
    <div id="formDiv"dir="rtl">
        <p id="warning">
            کد تاییدی برای پست الکترونیکی شما ارسال شده است!
        </p>
        <form id="myForm" action="index.php">
            <div id="div1">
            <input type="text" name="code" id="code"  placeholder="کد تایید را وارد کنید">
            </div>
            <br><br>
            <p id="clock"></p>
            <input type="submit" name="submit"  value="ارسال">
            <p><a href="" id="resendCode">کد تایید را دریافت نکردید؟</a> </p>
        </form>
    </div>
    </body>
</html>
