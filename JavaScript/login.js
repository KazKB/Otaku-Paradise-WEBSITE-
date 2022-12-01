function validate() {
    if (login.username.value == "" || login.email.value == "" || login.password.value == "") { //Checkd If Login Fields Are Empty
        alert("Fill In All Fields!");
        return false;
    }
    if (login.password.value.length < 6 || login.password.value.length > 13) { //Checks If Password Is Shorter Than 6 Characters As Well As Longer Than 12
        alert("Password is too short or long");
        return false;
    }
}