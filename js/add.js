const name = document.getElementById("Name");
const email = document.getElementById("Email");
const phoneNumber = document.getElementById("Contact");
const history = document.getElementById("History");
const age = document.getElementById("Age");
const address = document.getElementById("Address");
const bloodGroup = document.getElementById("BloodGroup");
const gender = document.getElementById("Gender");

function formValidation() {

    //name validation
    if(name.value == ""){
        document.getElementById("rNameErr").innerHTML="* Please enter your name!"
        return false;
    }

    if(!name.value.match(/^[a-z\sA-z]+$/)){
        document.getElementById("rNameErr").innerHTML="* It is not a name";
        return false;
    }

    if (name.value.length < 6) {
        document.getElementById("rNameErr").innerHTML="* Enter your proper name";
        return false;
    }

    if (name.value.length > 30) {
        document.getElementById("rNameErr").innerHTML="* Enter your proper name";
        return false;
    }

    //email validation
    if(email.value === ""){
        document.getElementById("rEmailErr").innerHTML = "* Plese enter your email !";
        return false;
    }

    if(email.value.length < 9 || email.value.length > 40){
        document.getElementById("rEmailErr").innerHTML="* Give proper email address";
        return false;
    }

    if(!email.value.match(/^[A-za-z0-9._]{3,}@[A-Za-z]{3,6}[.]{1}[A-Za-z.]{2,6}$/)){
        document.getElementById("rEmailErr").innerHTML="* It's not a proper email";
        return false;
    }


    //phonenumber validation 
    if(phoneNumber.value === ""){
        document.getElementById("rContactErr").innerHTML="* Please enter phone number!";
        return false;
    } 

    if(!phoneNumber.value.match(/\d$/)){
        document.getElementById("rContactErr").innerHTML="* It's not phone number";
        return false;
    }

    if(phoneNumber.value.length < 10){
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 digits";
        return false;
    }

    if(phoneNumber.value.length > 10){
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 digits";
        return false;
    }

    if(!phoneNumber.value.match(/^((98)|(97))[0-9]{8}$/)) {
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 characters long number and first digit starts with 98 or 97!";
        return false;
    }

    //age validation
    if(age.value === ""){
        document.getElementById("rAgeErr").innerHTML="* Please enter your age!";
        return false;
    }

    if(!age.value.match(/\d$/)){
        document.getElementById("rAgeErr").innerHTML="* It's not an proper age";
        return false;
    }

    if(age.value.length < 2 || age.value.length > 2) {
        document.getElementById("rAgeErr").innerHTML="* Enter your proper age";
        return false;
    }

    if(age.value < 0){
        document.getElementById("rAgeErr").innerHTML="* Age cannot be negative";
        return false;
    }

    if(age.value < 18){
        document.getElementById("rAgeErr").innerHTML="* Below 18 and above 60 cannot donate blood";
        return false;
    }

    if(age.value > 60){
        document.getElementById("rAgeErr").innerHTML="* Below 18 and above 60 cannot donate blood";
        return false;
    }

    //history
    if(history.value === "") {
        document.getElementById("rHistoryErr").innerHTML="* Please enter donated times!";
        return false;
    }

    if(history.value < 0){
        document.getElementById("rHistoryErr").innerHTML="* History time should be greater than 0";
        return false;
    }

    
    //address validation
    if(address.value == ""){
        document.getElementById("rAddressErr").innerHTML="* Address can't be empty";
        return false;
    }

    if(address.value.match(/\d$/) ){
        document.getElementById("rAddressErr").innerHTML="* This is not an address";
        return false;
    }

    if(address.value.length < 5 ){
        document.getElementById("rAddressErr").innerHTML="* Enter proper address";
        return false;
    }

    if(address.value.length > 40){
        document.getElementById("rAddressErr").innerHTML="* Enter proper address";
        return false;
    }

    //BloodGroup validation
    if (bloodGroup.value === ""){
        document.getElementById("rBloodGroupErr").innerHTML="* Please select your blood group!";
        return false;
    }

    // //Gender validation
    if(gender.value === ""){
        document.getElementById("rGenderErr").innerHTML="* Please select your gender!";
        return false;
    }

    return true;
}


