const name = document.getElementById("Name");
const email = document.getElementById("Email");
const citizenShip = document.getElementById("CitizenShip_No");
const phoneNumber = document.getElementById("Contact");
const age = document.getElementById("Age");
const address = document.getElementById("Address");
const bloodGroup = document.getElementById("BloodGroup");
const gender = document.getElementById("Gender");
const message = document.getElementById("Message");
const bloodPound = document.getElementById("BloodPound");


function formValidation() {

    //name validation
    if(name.value === ""){
        document.getElementById("rNameErr").innerHTML="* Please enter your name!"
    }

    if(!name.value.match(/^[a-z\sA-z]+$/)){
        document.getElementById("rNameErr").innerHTML="* It is not a name";
        name.focus();
        return false;
    }

    if (name.value.length < 6) {
        document.getElementById("rNameErr").innerHTML="* Enter your proper name";
        name.focus();
        return false;
    }

    if (name.value.length > 30) {
        document.getElementById("rNameErr").innerHTML="* Enter your proper name";
        name.focus();
        return false;
    }

    //email validation
    if(email.value === ""){
        document.getElementById("rEmailErr").innerHTML = "* Plese enter your email !";
        return false;
    }

    if(email.value.length < 9 || email.value.length > 40){
        document.getElementById("rEmailErr").innerHTML="* Give proper email address";
        email.focus();
        return false;
    }

    if(!email.value.match(/^[A-za-z0-9._]{3,}@[A-Za-z]{3,6}[.]{1}[A-Za-z.]{2,6}$/)){
        document.getElementById("rEmailErr").innerHTML="* It's not a proper email";
        email.focus();
        return false;
    }


    //citizenShip number validation
    if(!citizenShip.value === ""){
        document.getElementById("rCitizenErr").innerHTML="* Please enter CitizenShip number!";
        return false;
    }

    if(!citizenShip.value.match(/\d$/)){
        document.getElementById("rCitizenErr").innerHTML="* It's not CitizenShip number";
        citizenShip.focus();
        return false;
    }

    if(citizenShip.value <= 0){
        document.getElementById("rCitizenErr").innerHTML="* It's not CitizenShip number";
        citizenShip.focus();
        return false;
    }

    if(citizenShip.value.length < 4){
        document.getElementById("rCitizenErr").innerHTML="* Enter your proper CitizenShip Number";
        citizenShip.focus();
        return false;
    }

    if(citizenShip.value.length > 20){
        document.getElementById("rCitizenErr").innerHTML="* Enter your proper CitizenShip Number";
        citizenShip.focus();
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
        phoneNumber.focus();
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

    //message validation
    if(message.value === ""){
        document.getElementById("rMessageErr").innerHTML="* Please enter your message!";
        return false;
    }

    if(message.value.length < 10){
        document.getElementById("rMessageErr").innerHTML="* Please enter proper message!";
        return false;
    }

    if(message.value.length > 50){
        document.getElementById("rMessageErr").innerHTML="* Give short message";
        return false;
    }

    return true;
}