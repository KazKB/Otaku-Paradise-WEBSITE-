<?php 
session_start();
$fName = $_POST["firstName"];
$lName = $_POST["lastName"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$city = $_POST["city"];
$country = $_POST["country"];
$date = $_POST["date"];
$month = $_POST["month"];
$year = $_POST["year"];

$flag = false;
$check = fopen("users.csv", "r");

while(!feof($check)) { //Put Each Item Of The CSV File As A Member of The Logins Array
    $info = fgetcsv($check); //Breaks A Line Into An Array

    for ($i = 0; $i < count($info); $i++) { //Cycles Through The check Array To See If Their Is A Match For The Username, Email And Password Entered
        if ($username === $info[$i]) {
            include_once("sign-up.html"); //Includes The Html For The Sign-Up Page
            echo("<script>setTimeout(function(){alert('Username is already availalbe');},100);</script>"); //Alerts The User After 0.1 Second
            $flag = true;
        }
        else if ($email === $info[$i]) {
            include_once("sign-up.html"); //Includes The Html For The Sign-Up Page
            echo ("<script>setTimeout(function(){alert('Email is already availalbe');},100);</script>"); //Alerts The User After 0.1 Second
            $flag = true;
        }
        else if ($password === $info[$i]) {
            include_once("sign-up.html"); //Includes The Html For The Sign-Up Page
            echo("<script>setTimeout(function(){alert('Password is already availalbe');},100);</script>"); //Alerts The User After 0.1 Second
            $flag = true;
        }
    }
}

if ($flag === false) { //Checks To See If There Is A Repeat Of Unique Information
    $file = fopen("users.csv", "a") or die("Unable to find file.");   //Open CSV File To Add New User Information To File
    $userInfo = "\n$fName,$lName,$username,$email,$password,$city,$country,$date,$month,$year";
    fwrite($file, $userInfo);
    fclose($file);

    echo("<script>sessionStorage.setItem('profile', '1');  window.location = 'index.php';</script>");
fclose ($check);

//Saves All The Information In Session Variables For Later Use 
$_SESSION["firstName"] = $firstName;
$_SESSION["lastName"] = $lastName;
$_SESSION["username"] = $username;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["city"] = $city;
$_SESSION["country"] = $country;
$_SESSION["date"] = $date;
$_SESSION["month"] = $month;
$_SESSION["year"] = $year;
?>