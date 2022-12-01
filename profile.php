<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/wrapper.css" type="text/css">
        <link rel="stylesheet" href="CSS/profile.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/utility.js" async defer></script>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <p href="#">upgrade your browser</p> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Maybe Logo -->
        <header style="border: 0.2em solid #A057DB"> 
            <h1 id="title" style="background-color: #A057DB"> My Profile</h1>
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
        <main>
            <?php
                if ($_SESSION == null) { //Checks If Session Is Empty
                    echo('<div class="wrapper" style="border: 0.2em solid #A057DB">');
                    echo('<h3 id="icon">Profile Icon</h3>');
                    echo('<p style="margin-top: 2.5em; margin-bottom: 3.5em; cursor:pointer;">Please <span onclick="traverse(\'login.html\');">Login</span>/<span onclick="traverse(\'sign-up.html\');">Sign-Up</span></p>');
                    echo('</div>');
                }
                else if ($_SESSION["username"] != "") {//Checks If Username Is Empty
                    $check = fopen("users.csv", "r");
                    $email = $_SESSION["email"];

                    while(!feof($check)) { //Put Each Item Of The CSV File As A Member of The Logins Array
                        $info[] = fgetcsv($check); //Breaks A Line Into An Array

                        for ($i = 0; $i < count($info); $i++) { //Cycles Through The check Array To See If Their Is A Match For The Username, Email And Password Entered
                            foreach ($info[$i] as $k => $j) {
                                if ($email === $j) {
                                    $_SESSION["city"] = $info[$i][$k+2]; //Gets The City The User Lives In
                                    $_SESSION["country"] = $info[$i][$k+3]; ////Gets The Country The User Lives In
                                }
                            }
                        }
                    }

                    //Displays Relative Information
                    echo('<div class="wrapper" style="border: 0.2em solid #A057DB">'); 
                    echo('<h3 id="icon">Profile Icon</h3>');
                    echo('<p> Username: '.$_SESSION["username"].'</p>');
                    echo('<p> Email: '.$_SESSION["email"].'</p>');
                    echo('<p> Address: '.$_SESSION["city"].', '.$_SESSION["country"].'</p>');
                    echo('<h3 id="order-history">Order History</h3>');
                    echo('<p id="history">You haven\'t placed any orders yet.</p>');
                    echo('<button onclick="traverse(\'logout.php\');">Log Out</button>');
                    echo('</div>');
                }
            ?>
        </main>
        
        <!-- Footer of Site -->
        <?php
            if ($_SESSION == null)  //Checks If Session Is Empty
                echo('<footer style="background-color: #A057DB; position: absolute; top: 79.2%; width: 100%;">');
            else
                echo('<footer style="background-color: #A057DB; position: absolute; top: 100%; width: 100%;">');
        ?>
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
    </body>
</html>