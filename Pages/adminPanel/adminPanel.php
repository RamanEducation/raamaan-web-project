<?php include_once("../../includes/checkValidation/validation.php");
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
if($_SESSION["type"]==="User"){
    header("location: ../userPanel/userPanel.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه مدیر</title>
</head>
<body>

</body>
</html>