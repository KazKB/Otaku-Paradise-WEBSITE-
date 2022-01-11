<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Otaku Paradise</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/wrapper.css" type="text/css">
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/index.js" async defer></script>
        <script src="JavaScript/utility.js" async defer></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <p href="#">upgrade your browser</p> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Logo -->
        <header style="border: 0.2em solid #DB5657"> 
            <h1 id="title" style="background-color: #DB5657">Otaku Paradise</h1>
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
      
        <!-- Banner Section - These Banners May Act Like The Navigation Bar Whilst Letting Users Know What We Have To Offer. Will Be One Sliding Banner -->
        <div class="banner">
            <picture>
                <source srcset="Images/apparel-l.png" media="(min-width: 1001px)">
                <source srcset="Images/apparel-ml.png" media="(min-width: 701px)">
                <source srcset="Images/apparel-m.png" media="(min-width: 501px)">
                <img src="Images/apparel-s.png" alt="1st Banner">
            </picture>
            <div class="black-cover"></div>
            <div class="banner-overlay">
                <div>
                    <h3 class="banner-title">Apparel</h3>
                    <p class="browse" style="cursor: pointer;" onclick="traverse('apparel.php');">Browse</p>
                </div>
            </div>
        </div>

            <div class="banner">
                <picture>
                    <source srcset="Images/figurines-l.png" media="(min-width: 1001px)">
                    <source srcset="Images/figurines-ml.png" media="(min-width: 701px)">
                    <source srcset="Images/figurines-m.png" media="(min-width: 501px)">
                    <img src="Images/figurines-s.png" alt="2nd Banner">
                </picture>
                <div class="black-cover"></div>
                <div class="banner-overlay">
                <div>
                    <h3 class="banner-title">Figurines</h3>
                    <p class="browse" style="cursor: pointer;" onclick="traverse('figurines.php');">Browse</p>
                </div>
            </div>
        </div>

            <div class="banner">
                <picture>
                    <source srcset="Images/accessories-l.png" media="(min-width: 1001px)">
                    <source srcset="Images/accessories-ml.png" media="(min-width: 701px)">
                    <source srcset="Images/accessories-m.png" media="(min-width: 501px)">
                    <img src="Images/accessories-s.png" alt="3rd Banner">
                </picture>
                <div class="black-cover"></div>
                <div class="banner-overlay">
                <div>
                    <h3 class="banner-title">Accessories</h3>
                    <p class="browse" style="cursor: pointer;" onclick="traverse('accessories.php');">Browse</p>
                </div>
            </div>
        </div>

             <div class="banner">
                <picture>
                    <source srcset="Images/posters-l.png" media="(min-width: 1001px)">
                    <source srcset="Images/posters-ml.png" media="(min-width: 701px)">
                    <source srcset="Images/posters-m.png" media="(min-width: 501px)">
                    <img src="Images/posters-m.png" alt="4th Banner">
                </picture>
                <div class="black-cover"></div>
                <div class="banner-overlay">
                <div>
                    <h3 class="banner-title">Posters</h3>
                    <p class="browse" style="cursor: pointer;" onclick="traverse('posters.php');">Browse</p>
                </div>
            </div>
        </div>
        <!--Banner/Navigation Section-->

        <!-- Main Body of Site -->
        <main>  
            <!-- Main Content -->
            <table>
                <tr>
                    <th><p style="cursor: pointer;" onclick="traverse('new-arrivals.php');">New Arrivals</p></th>
                    <th><p style="cursor: pointer;" onclick="traverse('best-sellers.php');">Best Sellers</p></th>
                </tr>
                
                <tr>
                    <td>
                        <picture>
                            <source srcset="Images/new-arrivals-l.png" media="(min-width: 1000px)">
                            <source srcset="Images/new-arrivals-m.png" media="(min-width: 500px)">
                            <img src="Images/new-arrivals-s.png" alt="New Arrivals">
                        </picture>
                    </td>
                    <td>
                        <picture>
                            <source srcset="Images/best-seller-l.png" media="(min-width: 1000px)">
                            <source srcset="Images/best-seller-m.png" media="(min-width: 500px)">
                            <img src="Images/best-seller-s.png" alt="Best Sellers">
                        </picture>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>My Hero Academia Key Chains</p>
                        <p class="price">$45.00</p>
                    </td>
                    <td>
                        <p>Kurumi Key Chain</p>
                        <p class="price">$15.00</p>
                    </td>
                </tr>
            </table>

            <p id="view-all" style="cursor: pointer;" onclick="traverse('view-all.php');">View All</p>
            <!-- Main Content -->
        </main>

        <!-- Footer of Site -->
        <footer style="background-color: #DB5657">
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
    </body>
</html>