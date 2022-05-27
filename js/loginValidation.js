const username = document.getElementById("Uname");
const password = document.getElementById("Pass");

function formValidation() {

    // username validation
    if(!username.value.match(/^[a-z\sA-z]+$/)){
        document.getElementById("rNameErr").innerHTML="* Admin usrname cannot be number";
        return false;
    }

    if (username.value.length < 6) {
        document.getElementById("rUsernameErr").innerHTML="* Enter your proper name";
        return false;
    }

    if (username.value.length > 30) {
        document.getElementById("rUsernameErr").innerHTML="* Enter your proper name";
        return false;
    }

    // password verification
    if(!password.value.match(/^.{5,15}$/)) {
        document.getElementById("rPasswordErr").innerHTML="* Password length must be between 5-15 characters!";
        return false;
    }

    return true;
   
}