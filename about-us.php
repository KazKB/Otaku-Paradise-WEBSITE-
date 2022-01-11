<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/about-us.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/utility.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <p href="#">upgrade your browser</p> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Maybe Logo -->
        <header style="border: 0.2em solid #DA51CD"> 
            <h1 id="title" style="background-color: #DA51CD">About Us</h1>
            <h3 id="menu" onclick="popUpMenu()">Pop-Up Menu</h3>
            <h3 id="logo" style="cursor: pointer;" onclick="traverse('index.php');">Otaku Paradise</h3>
            <p id="profile" style="cursor: pointer;" onclick="traverse('profile.php');">Profile</p>
            <p id="cart" style="cursor: pointer;" onclick="traverse('cart.php');">Cart</p>
            <h3 id="search">Search Icon</h3>

            <div id="pop-up-menu">
                <h3>Main Navigation</h3>
                <h6 id="close" onclick="popUpMenu()">X</h6>
                <p href="apparel.php">Apparel</p>
                <p href="figurines.php">Figurines</p>
                <p href="accessories.php">Accesories</p>
                <p href="posters.php">Posters</p>
                <?php
                    session_start();
                    if ($_SESSION == null) { //Checks If Session Is Empty
                        echo('<p href="login.html">Log In</p>'); //Login Page
                        echo('<p href="sign-up.html">Sign-Up</p>'); //Sign-Up Page
                    }
                    else if ($_SESSION["username"] != "") //Checks If Username Is Empty
                        echo('<p href="logout.php">Log Out</p>'); // Log Out
                ?>
            </div>
        </header>

        <!-- Main Body of Site -->
        <main id="wrapper" style="border: 0.2em solid #DA51CD;">
            <p class="text">Otaku Paradise was founded in 2020 by the co-founders Sadiki Roberts, the Sr. Designer, Kaleel Boston, the Developer, along with Beyoncé Angol, Jr. Designer.</p>
            <p class="text">Otaku Paradise was created to the convenience of Anime Lovers also known as “Otakus” who would want to show their love for their favorite series or movies. So, while designing this we made sure to put every detail we could to make sure we reach out to every otaku out there, who have been tiredlessly searching for their favorite anime merchandise on the web.</p>
            <p class="text">Otaku Paradise sells many types of merchandise to fit every single otaku’s liking; from apparel to figurines and much more than you could think of. Each one of the products sold at Otaku Paradise is carefully selected and authenticated to make sure you, the customer, get the ‘real deal’. The clothing has been inspected to the finest detail and design, to make sure that there’s no thread or design out of place.</p>

            <h3>Meet The Crew</h3>
            <div class="crew">
                <picture>
                    <source srcset="Images/sr-designer-m.png" media="(min-width: 700px)">
                    <img src="Images/sr-designer-s.png" alt="Sr. Designer">
                </picture>
            </div>
            <p>Sadiki Roberts (GlizzyKami)</p>
            <p>Senior Designer</p>

            <div class="crew">
                <picture>
                    <source srcset="Images/jr-designer-m.png" media="(min-width: 700px)">
                    <img src="Images/jr-designer-s.png" alt="Jr. Designer">
                </picture> 
            </div>               
            <p>Beyonce Angol (The Introvert)</p>
            <p>Junior Designer</p>

            <div class="crew">
                <picture>
                    <source srcset="Images/sr-developer-m.png" media="(min-width: 700px)">
                    <img src="Images/sr-developer-s.png" alt="Sr. Developer">
                </picture>
            </div>
            <p>Kaleel Boston (KazKJr)</p>
            <p style="margin-bottom: 2em">Developer</p>
        </main>

        <!-- Footer of Site -->
        <footer style="background-color: #DA51CD">
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
        
        <script src="menu.js" async defer></script>
    </body>
</html>