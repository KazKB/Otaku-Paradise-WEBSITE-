<?php
session_start();
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$users = fopen("users.csv", "r");
$flagName = false;
$flagMail = false;
$flagPassword = false;

//Put Each Item Of The CSV File As A Member of The Logins Array
while(!feof($users)) { 
    $logins = fgetcsv($users); //Breaks A Line Into An Array

    for ($i = 0; $i < count($logins); $i++) { //Cycles Through The Logins Array To See If Their Is A Match For The Username, Email And Password Entered
        if ($username === $logins[$i]) 
            $flagName = true;
        else if ($email === $logins[$i])
            $flagMail = true;
        else if ($password === $logins[$i])
            $flagPassword = true;
    }
}
fclose ($users);

if ($flagName == true && $flagMail == true && $flagPassword == true) {//Checks If All The Information Entered Is Correct
    echo("<script>sessionStorage.setItem('profile', '1'); window.location = 'index.php';</script>");
}
else { //If Not Correct Tell The User They Entered Invalid And Send Them Back To The Login Page
    include("login.html"); //Includes The Html For The Login Page
    echo("<script>setTimeout(function(){alert('Username, Email or Password is incorrect');},100);</script>"); //Alerts The User After 0.1 Second
}

//Saves All The Information In Session Variables For Later Use
$_SESSION["username"] = $username;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
?>