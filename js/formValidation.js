const name = document.getElementById("Name");
const email = document.getElementById("Email");
const citizenShip = document.getElementById("CitizenShip_No");
const phoneNumber = document.getElementById("Contact");
const age = document.getElementById("Age");
const address = document.getElementById("Address");
const bloodGroup = document.getElementById("BloodGroup");
const gender = document.getElementById("Gender");


function formValidation() {

    //name validation
    if(!name.value.match(/^[a-z\sA-z]+$/)){
        document.getElementById("rNameErr").innerHTML="* It is not a name";
        return false;
    }

    if (name.value.length < 6 || name.value.length > 20) {
        document.getElementById("rNameErr").innerHTML="* Enter your proper name";
        return false;
    }

    //email validation
    // if(email == ""){
    //     document.getElementById("rEmailErr").innerHTML = "* Enter your email";
    //     return false;
    // }
    // if(email.value.length < 9){
    //     document.getElementById("rEmailErr").innerHTML="* Give proper email address";
    //     return false;
    // }
    // if(!emailPattern.value.match(/^([a-zA-Z0-9_.-]+@{1}([a-zA-Z]{2,4}))$/)){
    //     document.getElementById("rEmailErr").innerHTML="* It's not a proper email";
    //     return false;
    // }

    //citizenShip number validation
    if(!citizenShip.value.match(/\d$/)){
        document.getElementById("rCitizenErr").innerHTML="* It's not CitizenShip number";
        return false;
    }

    if(citizenShip.value <= 0){
        document.getElementById("rCitizenErr").innerHTML="* It's not CitizenShip number";
        return false;
    }

    if(citizenShip.value.length < 4){
        document.getElementById("rCitizenErr").innerHTML="* Enter your proper CitizenShip Number";
        return false;
    }


    //phonenumber validation 
    if(phoneNumber.value == ""){
        document.getElementById("rContactErr").innerHTML="* Please enter phone number";
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

    if(!phoneNumber.value.match(/^[9][0-9]{9}$/)) {
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 characters long number and first digit starts with 9!";
        phoneNumber.focus();
        return false;
    }

    //age validation
    if(!age.value.match(/\d$/)){
        document.getElementById("rAgeErr").innerHTML="* It's not an proper age";
        return false;
    }

    if(age.value.length < 2 || age.value.length > 2) {
        document.getElementById("rAgeErr").innerHTML="* Enter your proper age";
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

    if(address.value.length > 20){
        document.getElementById("rAddressErr").innerHTML="* Enter proper address";
        return false;
    }

    //BloodGroup validation
    if (bloodGroup.value ==""){
        document.getElementById("rBloodGroupErr").innerHTML="* Please select your blood group!";
        return false;
      }

    //Gender validation
    if(gender.value == ""){
        document.getElementById("rGenderErr").innerHTML="* Please select your gender!";
        return false;
    }

    return true;
}