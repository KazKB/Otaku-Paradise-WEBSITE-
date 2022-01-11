<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/contact-us.css" type="text/css">
        <link rel="stylesheet" href="CSS/wrapper.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/utility.js"></script>
        <script src="JavaScript/contact-us.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <p href="#">upgrade your browser</p> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Maybe Logo -->
         <header style="border: 0.2em solid #FF981C"> 
            <h1 id="title" style="background-color: #FF981C">Contact Us</h1>
            <h3 id="menu" onclick="popUpMenu()">Pop-Up Menu</h3>
            <h3 id="logo" style="cursor: pointer;" onclick="traverse('index.php');">Otaku Paradise</h3>
            <p id="profile" style="cursor: pointer;" onclick="traverse('profile.php');">Profile</p>
            <p id="cart" style="cursor: pointer;" onclick="traverse('cart.php');">Cart</p>
            <h3 id="search">Search Icon</h3>

            <div id="pop-up-menu">
                <h3>Main Navigation</h3>
                <h6 id="close" onclick="popUpMenu()">X</h6>
                <p style="cursor: pointer;" onclick="traverse('apparel.php');">Apparel</p>
                <p style="cursor: pointer;" onclick="traverse('figurines.php');">Figurines</p>
                <p style="cursor: pointer;" onclick="traverse('accessories.php');">Accesories</p>
                <p style="cursor: pointer;" onclick="traverse('posters.php');">Posters</p>
                <?php
                    session_start();
                    if ($_SESSION == null) { //Checks If Session Is Empty
                        echo('<p style="cursor: pointer;" onclick="traverse(\'login.html\');">Log In</p>'); //Login Page
                        echo('<p style="cursor: pointer;" onclick="traverse(\'sign-up.html\');">Sign-Up</p>'); //Sign-Up Page
                    }
                    else if ($_SESSION["username"] != "") //Checks If Username Is Empty
                        echo('<p style="cursor: pointer;" onclick="traverse(\'logout.php\');">Log Out</p>'); // Log Out
                ?>
            </div>
        </header>

        <!-- Main Body of Site -->
        <main class="wrapper" style="border: 0.2em solid #FF9b1C">
            <h3 id="mail">Contact Us Section</h3>
            <form name="message" action="message.php" method="POST" onsubmit="return validate();">
                <?php
                    if ($_SESSION == null) { //Checks If Session Is Empty
                            echo('<label for="firstName">First Name*'); 
                            echo('<input id="firstName" name="firstName" type="text" size="20" value="">'); 
                            echo('</label>'); 
                            echo('<label for="lastName">Last Name*'); 
                            echo('<input id="lastName" name="lastName" type="text" size="20" value="">'); 
                            echo('</label>'); 
                            echo('<label for="email">Email*'); 
                            echo('<input id="email" name="email" type="text" size="20" value="">'); 
                            echo('</label>');   
                        }
                        else if ($_SESSION["username"] != "") {//Checks If Username Is Empty
                            $check = fopen("users.csv", "r");
                            $email = $_SESSION["email"];
        
                            while(!feof($check)) { //Put Each Item Of The CSV File As A Member of The Logins Array
                                $info = fgetcsv($check); //Breaks A Line Into An Array
        
                                for ($i = 0; $i < count($info); $i++) { //Cycles Through The check Array To See If Their Is A Match For The Username, Email And Password Entered
                                    if ($email === $info[$i]) {
                                        $_SESSION["firstName"] = $info[$i-3]; //Gets User's First Name
                                        $_SESSION["lastName"] = $info[$i-2]; // Gets User's Last Name
                                    }
                                }
                            }
                            echo('<p> Name: '.$_SESSION["firstName"].' '.$_SESSION["lastName"].'</p>'); //Prints User's First And Last Names
                            echo('<p> Email: '.$_SESSION["email"].'</p>'); //Prints User's Email
                        }
                ?>

                <label for="password">Email Password*
                    <input id="password" name="password" type="password" size="20" value="">
                </label>
                <label for="number">Phone Number
                    <input id="number" name="number" type="text" size="20" value="">
                </label>
                <label for="messageField">Message
                    <textarea id="messageField" name="messageField" rows="10" cols="40"></textarea>
                </label>
                <input id="send" name="send" type="submit" value="Send &nbsp;&#9654">
            </form>
        </main>

        <!-- Footer of Site -->
        <footer style="background-color: #FF981C">
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
    </body>
</html>