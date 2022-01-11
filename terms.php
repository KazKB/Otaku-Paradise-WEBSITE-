<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Terms & Conditions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/header-footer.css" type="text/css">
        <link rel="stylesheet" href="CSS/terms.css" type="text/css">
        <link rel="icon" href="Images/icon.png" type="image/gif">
        <script src="JavaScript/utility.js" async defer></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation Bar And Maybe Logo -->
        <header style="border: 0.2em solid #518CDA"> 
            <h1 id="title" style="background-color: #518CDA">Terms & Conditions</h1>
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
        <main id="wrapper" style="border: 0.2em solid #518CDA;">
            <h3>General Terms Of Use</h3>
            <p>
                Be advised that your use of the Service constitutes your agreement and binds you to the following terms and conditions (the "Agreement"). We reserve the right to revise the terms that govern your use of the Service for any reason, with or without notice.
            </p>

            <h3>Contents</h3>
            <p>
                Unless otherwise noted, all materials, including images, designs, icons, photographs, illustrations, video and music clips, and other materials that appear as part of this Site (collectively, the "Contents") are copyrights, trademarks, trade dress and/or other forms of intellectual property owned, controlled and/or used under license or with other legal authority by Otaku Paradise. The Site as a whole is protected by copyright and trade dress, all worldwide rights are owned by Otaku Paradise.
                <br>
                <br>
                The Contents of the Site are intended for personal, non-commercial use except of the ability to purchase goods online. You may not reproduce, publish, transmit, distribute, display, modify, create derivative works from, sell or participate in any sale of, or exploit in any way, in whole or in part, any of the Contents, the Site, or any related software.
            </p>

            <h3>Correction of Content</h3>
            <p>
                Otaku Paradise reserves the right to correct any errors, inaccuracies or omissions and to change or update information at any time with or without prior notice.
            </p>

            <h3>Sale of Items</h3>
            <p>
                All sales on  merchandise are final.
            </p>

            <h3>Fraud</h3>
            <p>
                Otaku Paradise takes fraud prevention very serious. We reserve the right to flag any online order for fraud prevention purposes. This may cause delays in processing. Customers are encouraged to provide accurate contact information. Customers submitting orders with varying information may be subject to such delays in processing. Flagged orders may be held from processing to await explanation. First-time orders from new customers at above-average dollar amounts may only be authorized to ship to the billing address provided. Orders submitted using unsupported or international credit card information may be asked to confirm authorization.
            </p>

            <h3>User Submisssions</h3>
            <p>
                Ill comments, suggestions, feedback, ideas, and other submissions disclosed, submitted or offered to Otaku Paradise on or by this site or otherwise disclosed, submitted or offered in connection to the Service (collectively, "Comments") shall be and remain the sole property of Otaku Paradise.
                <br>
                <br>
                Such disclosure, submission, or offer of any Comments shall constitute an assignment to Otaku Paradise of any and all worldwide rights in all copyrights and other intellectual properties in the Comments.
                <br>
                <br>
                Otaku Paradise shall own all such rights, titles and interests and shall not be limited in any way in its use, commercial or otherwise. Otaku Paradise is and shall be under no obligation to maintain any Comments in confidence; to pay any other person or entity any compensation for any Comments; or to respond to any Comments. You agree that Otaku Paradise may use the Comments for marketing and promotional purposes.
                <br>
                <br>
                You agree, represent, and warrant that no Comments submitted by you to the Site or Service will violate any right of any third party, including copyright, trademark, privacy or other personal or proprietary right(s). You further agree that no Comments submitted by you to the Site or Service will contain unlawful, abusive or obscene material. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.
            </p>

            <h3>External Links and Services</h3>
            <p>
                Otaku Paradise reserves the right to correct any errors, inaccuracies or omissions and to change or update information at any time with or without prior notice.
            </p>

            <h3>Indemnification</h3>
            <p>
                By using the site or Service you agree to indemnify and hold harmless Otaku Paradise and/or any of its affiliates, owners, officers, representatives, or employees from and against any and all claims, damages, costs and expenses, including attorneys' fees, arising from or related to your use.
                <br>
                <br>
                This site and Service and all Contents are provided without warrant, expressed and implied. Users participate at their own risk. Otaku Paradise nor any of its affiliates, owners, officers, representatives, or employees are liable for any damages of any kind related to use of the site or Service.
            </p>

            <h3>Governing Law</h3>
            <p>
                This Agreement shall be construed in accordance with the laws of the State of Texas.
            </p>

            <h3>Termination of Agreement</h3>
            <p>
                This Agreement is effective unless and until terminated by Otaku Paradise. Otaku Paradise may terminate this Agreement at any time and may do so immediately without notice.
                <br>
                <br>
                Otaku Paradise has sole discretion if you fail to comply with any term or provision of this Agreement. Upon any termination of this Agreement, you must promptly destroy all materials downloaded or otherwise obtained from the Site, as well as all copies of such materials, whether made under the terms of this Agreement or otherwise
            </p>
        </main>

        <!-- Footer of Site -->
        <footer style="background-color: #518CDA">
            <h6 id="contact" style="cursor: pointer;" onclick="traverse('contact-us.php');">Contact Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('about-us.php');">About Us</h6>
            <h6 style="cursor: pointer;" onclick="traverse('terms.php');">Terms And Conditions</h6>
            <h6 id="copyright">&copy;2021, Phantom 0</h6>
        </footer>
    </body>
</html>