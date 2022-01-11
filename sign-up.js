<!-- 
function validate() {
    if (signUp.firstName.value == "" || signUp.lastName.value == "" || signUp.username.value == "" || signUp.email.value == "" || signUp.password.value == "" || signUp.city.value == "" || signUp.country.value == "") { //Checkd If signUp Fields Are Empty
        alert("Fill In All Fields!");
        return false;
    }
    if (signUp.password.value.length < 6 || signUp.password.value.length > 13) { //Checks If Password Is Shorter Than 6 Characters As Well As Longer Than 12
        alert("Password is too short or long");
        return false;
    }
}
//-->