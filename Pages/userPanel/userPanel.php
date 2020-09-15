<?php include_once("../../includes/checkValidation/validation.php");
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
if($_SESSION["type"]=="Admin"){
   header("location: ../adminPanel/adminPanel.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه کاربر</title>
</head>
<body>

</body>
</html>
