<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تایید ایمیل</title>
    <link type="text/css" rel="stylesheet" href="emailConfirmation.css">
</head>
<body>

    <div class="container">
        <form method="post" action="postCode.php">
            <h3>کد تاییدی برای پست الکترونیکی شما ارسال شده است!</h3>
            <div class="input-fluid">
                <p id="generalError"><?php include_once ("wrongCode.php");?></p>
                <span class="hiddenSpan" id="username">نام کاربری</span>
                <input class="username" type="text" name="emailCode" id="codeInput" maxlength="6" placeholder="کد تایید">
                <input type="submit" value="ارسال">
               <a href="emailConfirmation.php?resend=1" style="color: dodgerblue;">ارسال مجدد کد تایید</a>
        </form>
    </div>
</body>
</html>