<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Purchase</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/purchase.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/utility.js" async defer></script>
        <script src="JavaScript/purchase.js" async defer></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Maybe Logo -->
        <header style="border: 0.2em solid #032975"> 
            <h1 id="title" style="background-color: #032975"> Purchase</h1>
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
            <section id="display"></section>
            
            <section>
                <form name="cartInfo" action="addCart.php" method="POST" onsubmit="return cart();">
                    <input name="item-name" id="item-name" type="text" >
                    <p id="size" style="display: none">Size: 
                        <select name="size" style="display: inline-block;">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </p>
                    <p>Quantity: 
                        <select name="quantity" style="display: inline-block">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </p>
                    <input name="price" id="price" type="text">
                    <input id="submit" type="submit" value="Add To Cart">
                    <?php 
                        $reviews = fopen("review.csv", "r");
                        $i = 0;

                        while (!feof($reviews)) { 
                            $review = fgetcsv($reviews); 
                            $i++;
                        }

                        echo('<p id="ratings">4.5 <span>'.$i.' reviews</span></p>');
                        fclose($reviews);
                    ?>
                </form>
            </section>

            <p id="reviews">Reviews</p>
            <form name="reviewForm" action="review.php" method="POST" onsubmit="return validate();">
                <textarea name="review" id="write-review" placeholder="Write Your Review Here"></textarea>
                <input type="submit" value="Submit">
            </form>
            <?php 
                $reviews = fopen("review.csv", "r");

                while (!feof($reviews)) { 
                    $review = fgetcsv($reviews); 

                    for ($i = 0; $i < count($review); $i++){
                        echo('<p id="person-review">A User Said: <b>'.$review[$i].'</b></p>');
                    }
                }
                fclose($reviews);
            ?>
        </main>

        <!-- Footer of Site -->
        <footer style="margin-top: 2em; background-color: #032975">
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
    </body>
</html>