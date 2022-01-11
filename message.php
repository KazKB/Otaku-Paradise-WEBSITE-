<?php
session_start();
if ($_SESSION == null) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
} 
else {
    $firstName = $_SESSION["firstName"];
    $lastName = $_SESSION["lastName"];
    $email = $_SESSION["email"];
}
$password = $_POST["password"];
$number = $_POST["number"];
$message = $_POST["messageField"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\PHPMailer\src\Exception.php';
require 'C:\xampp\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\PHPMailer\src\SMTP.php';
$mail = new PHPMailer(true);

// Send mail using Gmail
if($mail){
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = $email; // your GMAIL username
    $mail->Password = $password; // Your GMAIL password
}

// Typical mail data
$mail->AddAddress("kaleelboston@gmail.com", "Boston"); //Recipient
$mail->SetFrom($email, "$firstName $lastName"); //Sender
$mail->Subject = "Customer Message";
$mail->Body = $message;

try{
    $mail->Send();
    header ("Location: index.php");
    echo ("<script>setTimeout(function(){alert('Message Sent!');}, 500);</script>"); //Alerts The User After 0.5 Second
} catch(Exception $e){
    // Something went bad
    header ("Location: contact-us.php");
    echo ("<script>setTimeout(function(){alert('Message Failed To Send');}, 500);</script>"); //Alerts The User After 0.5 Second
}
?>