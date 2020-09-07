function checkValidUsername() {
    let usernameInput=document.getElementById("username");
    let usernameError=document.getElementById("usernameError");
    let usernameValue=usernameInput.value;
    let regexErrorMessage="نام کاربری فقط شامل حروف انگلیسی و اعداد است!";
    let numericErrorMessage="نام کاربری باید حداقل 8 کاراکتر داشته باشد!";
    let correctUsername="نام کاربری معتبر است!";
    if(usernameValue!==""){
        usernameInput.dir="ltr";
    }else {
        usernameInput.dir="rtl";
    }
    const reg=RegExp("[^A-Za-z0-9]");
    if(reg.test(usernameValue)==false){
        if(usernameValue.length<8){
            usernameError.innerHTML=numericErrorMessage;
            usernameError.style.color="red";
            return  false;
        }else{
            usernameError.innerHTML=correctUsername;
            usernameError.style.color="green";
            return false;
        }
    }else{
            usernameError.innerHTML = regexErrorMessage;
            usernameError.style.color = "red";
            return false;
    }
}
function checkValidPassword(){
    let passwordInput=document.getElementById("password");
    let repeatInput=document.getElementById("repeat");
    let passwordError=document.getElementById("passwordError");
    let regexErrorMessage="رمز عبور باید شامل حروف انگلیسی اعداد و نشانه ها باشد!";
    let numericError="رمز عبور باید حداقل 6 حرف باشد!";
    let notEqualError="رمز عبور های وارد شده یکسان نیستند!";
    let correctPassword="رمز عبور معتبر است!";
    let passwordValue=passwordInput.value;
    if(passwordValue!==""){
        passwordInput.dir="ltr";
    }else {
        passwordInput.dir="rtl";
    }
    if(repeatInput.value!==""){
        repeatInput.dir="ltr";
    }else {
        repeatInput.dir="rtl";
    }
    const regex=RegExp("[^a-zA-Z0-9@#$%*_=+\\|/]");
    if(regex.test(passwordValue)==false) {
        if (passwordValue.length < 6) {
            passwordError.innerHTML = numericError;
            passwordError.style.color = "red";
        } else {
            if (repeatInput.value !== passwordValue) {
                passwordError.innerHTML = notEqualError;
                passwordError.style.color = "red";
                return;
            }
            passwordError.innerHTML = correctPassword;
            passwordError.style.color = "green";
        }
    }else {
        passwordError.innerHTML=regexErrorMessage;
        passwordError.style.color="red";
    }
}
function checkValidEmail() {
    let emailInput=document.getElementById("email");
    let emailValue=emailInput.value;
    if(emailValue!==""){
        emailInput.dir="ltr";
    }else {
        emailInput.dir="rtl";
    }

}
function checkValidName(input) {
    let inputName;
    let anotherInput;
    if(input==="firstName"){
        inputName=document.getElementById("firstName");
        anotherInput=document.getElementById("lastName");
    }else if(input==="lastName"){
        anotherInput=document.getElementById("firstName");
        inputName=document.getElementById("lastName");
    }
    let nameErrorMessage="لطفا نام و نام خانوادگی معتبر وارد کنید!";
    let nameError=document.getElementById("nameError");
    const regex=RegExp("[^A-Za-zا-ی]");
    let nameValue=inputName.value;
    if(regex.test(nameValue)==false){
        if(regex.test(anotherInput.value)==false){
            nameError.innerHTML="";
        }
        else{
            nameError.innerHTML=nameErrorMessage;
            nameError.style.color="red";
        }
    }else{
        nameError.innerHTML=nameErrorMessage;
        nameError.style.color="red";
    }
}
//// این پایینیه کار داره!
function checkNotEmpty() {
    let username=document.getElementById("username").value.trim();
    let password=document.getElementById("password").value.trim();
    let repeatPassword=document.getElementById("repeat").value.trim();
    let email=document.getElementById("email").value.trim();
    let firstName=document.getElementById("firstName").value.trim();
    let lastName=document.getElementById("lastName").value.trim();
    let nameError=document.getElementById("nameError");
    let form=document.getElementById("myForm");
    if(username=="" || password=="" || repeatPassword=="" || email=="" || firstName=="" || lastName==""){
           form.reset();
           nameError.innerHTML="لطفا همه فیلد ها را پر کنید!";
           nameError.style.color="red";
       return;
   }
    if(isEveryThingTrue()==true){
        form.action="../../confirmEmail/htmlPHP/confirm.php";
        return;
    }else{
        form.reset();
        document.getElementById("usernameError").innerHTML="";
        document.getElementById("passwordError").innerHTML="";
        nameError.innerHTML="لطفا فیلد ها را درست پر کنید!";
        nameError.style.color="red";
        return;
    }
}
function isEveryThingTrue() {
    let usernameError=document.getElementById("usernameError");
    let passwordError=document.getElementById("passwordError");
    let nameError=document.getElementById("nameError");
        if(usernameError.innerHTML==="نام کاربری معتبر است!"){
            if(passwordError.innerHTML==="رمز عبور معتبر است!"){
                if(nameError.innerHTML===""){
                    return true;
                }else return false;
            }else return false;
        }else return false;
}

let username=document.getElementById("username");
let password=document.getElementById("password");
let repeatPassword=document.getElementById("repeat");
let email=document.getElementById("email");
let firstName=document.getElementById("firstName");
let lastName=document.getElementById("lastName");

username.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});
password.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});
repeatPassword.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});
email.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});
firstName.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});
lastName.addEventListener("keypress",function (event) {
    if(event.key==="Enter"){
        checkNotEmpty();
    }
});