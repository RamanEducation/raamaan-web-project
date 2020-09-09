<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">-->
    <script src="inputError.js"></script>
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>منوی ثبت نام</title>
    <style>
    </style>
</head>
<body>

    <div class="container">
        <form method="post" id="myForm">
            <h1>فرم ثبت نام</h1>
            <p id="generalError"><?php include_once ("generalError.php");?></p>
            <div class="input-fluid">
                <span class="hiddenSpan" id="username">نام کاربری</span>
                 <input class="username" type="text" name="username" id="usernameInput" maxlength="20" placeholder="نام کاربری" onkeyup="checkValidUsername()">
                <p id="usernameError"></p>
            </div>
            <div class="input-fluid">
                <span class="hiddenSpan" id="password">رمز عبور</span>
                <input class="password" id="passwordInput" type="password" name="password" maxlength="20" placeholder="رمز عبور" onkeyup="checkValidPassword()">
            </div>
            <div class="input-fluid">
                <span class="hiddenSpan" id="confirm">تایید</span>
                <input class="confirm" id="confirmInput" type="password" maxlength="20" placeholder="تایید" onkeyup="checkValidPassword()">
                <p id="passwordError"></p>
            </div>
            <div class="input-fluid">
                <span class="hiddenSpan" id="email">پست الکترونیکی</span>
                <input class="email" id="emailInput" type="email" name="email" placeholder="پست الکترونیکی" onkeyup="checkValidEmail()">
                <p  id="emailError"></p>
            </div>
            <div class="input-fluid">
                <span class="hiddenSpan" id="firstName">نام</span>
                <input class="firstName" id="firstNameInput" type="text" name="firstName" maxlength="20" placeholder="نام" onkeyup="checkValidName(id)">
            </div>
            <div class="input-fluid">
                <span class="hiddenSpan" id="lastName">نام خانوادگی</span>
                <input class="lastName" id="lastNameInput" type="text" name="lastName" maxlength="20" placeholder="نام خانوادگی" onkeyup="checkValidName(id)">
                <p id="nameError"></p>
            </div>
<!--            <div class="custom-select">-->
<!--                <select>-->
<!--                    <option>مرد</option>-->
<!--                    <option>زن</option>-->
<!--                </select>-->
<!--            </div>-->
            <div class="ClearFix">
            <input type="submit" value="ارسال" onclick="submitCode()">
            </div>

        </form>
    </div>
</body>
    <script src="../plugin/jQuery/jquery-3.5.1.js"></script>
    <script src="animateSpan.js"></script>

</html>