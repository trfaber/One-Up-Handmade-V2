<!DOCTYPE html>

<html>

    <head>
        <!--Google font and font awesome set-up-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Roboto:wght@300&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/7449cde613.js" crossorigin="anonymous"></script>
        <!--Title of Website-->
            <title>One Up Handmade Shop</title>
    
        <!--Styles-->        
            <link href="./resources/css/index.css" type="text/css" rel="stylesheet" media="screen and (min-width: 590px)">
            <!-- alter mobile setting in future
            link href="./resources/css/mobile.css" type="text/css" rel="stylesheet" media="screen and (max-width: 600px)"
            -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>

    <body>
        <!--php-->
            <?php
                        
            ?>

        <!-- Shop Header -->
            <header>
                <img class="logo" src="./resources/images/logo.jpg" alt="One Up Handmade Logo">
                <nav class="top-nav">
                    <!--Nav Links-->
                    <ul class="top-nav">
                        <li class="top-nav"><a href="index.php">Home</a></li>
                        <li class="top-nav"><a href="index.php#shop">Shop</a></li>
                        <li class="top-nav"><a href="about.php">About</a></li>
                        <li class="top-nav"><a href="contact.php">Contact</a></li>
                    </ul>
                    <!--Search bar-->
                    <div class="wrapper">
                        <input class="search" type="text" placeholder="Find Cool Stuff">
                        <span class="search-icon">
                            <!--<i class="fa-solid fa-x fa-fw fa-2xs"></i>-->
                            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        </span>
                        <!--Shopping Cart-->
                        <a href="cart.php" class="cart">
                            <i class="fa-solid fa-cart-shopping fa-1x"></i>
                        </a>
                    </div>
                </nav>
            </header>
            <br>

        <!--About-->
            <h2>About the Maker</h2>
                <div class="about">
                    <img class="about" src="https://d1q8o8ch5u48ua.cloudfront.net/images/maker_profile_pic/1010/34B65FB2-1FCC-4148-AA7B-84398BEFCEFD.jpeg?t=1649517499" alt="About the Maker">
                    <p>Hello, hi! I’m Andrea. My pronouns are she/her/they. I’m a nerdy person and I’d love to make your little something they’d be comfortable in and that lasts years!</p>
                    <p>I have been sewing more than 20 years off and on, but have been sewing clothing for the passed 5 years consistently. I strive to find fabric from groups who support hand drawn fan art, small artists, and support inclusive and diverse companies.</p>
                    <p>As a parent to a  little boy who loves dresses, you will find gender absent from my listings. I feel that clothes do not have a gender and everyone should be free to wear what they choose. I always try to refer to kiddos as they/them or as littles, nerdlings, geeks to be, etc. There are so many ways to refer to people other than their outside parts.</p>
                    <p style="text-align: center;">Let me know if there’s any way I can help you~!</p>
                </div>
            <br>

        <!--How it's made-->
            <h2>How it's Made</h2>
                <div class="vid">
                    <iframe class="tiktok" src="https://www.tiktok.com/@oneuphandmade/video/7108518352494071082" width=60% min-width="450px">
                    </iframe>
                </div>

        <!--GWM How to/Why it's better-->
            <h2>What is GWM Clothing?</h2>
                <div class="gwm">
                    <p>GWM stands for grow-with-me, this means the clothing can be adjusted by either rolling bands to adjust torsos, legs, and, sleeves length or adjusting snaps to change strap and closures! This makes the clothing last so much longer and allows extra room for the best fit to keep your kiddo happy!</p>
                </div>
            
        <!--Bottom Nav-->
            <footer class="bottom-nav">
                <ul class="bottom-nav">
                        <li class="bottom-nav"><a href="index.php">Home</a></li>
                        <li class="bottom-nav"><a href="index.php#shop">Shop</a></li>
                        <li class="bottom-nav"><a href="about.php">About</a></li>
                        <li class="bottom-nav"><a href="contact.php">Contact</a></li>
                </ul>
                <span>Follow us on social media!
                        <div class="social">
                        <!-- Social Icons -->
                            <a href="https://www.facebook.com/oneuphandmade" target="_blank">
                                <i class="fa-brands fa-facebook fa-fw"></i>
                            </a>
                            <a href="https://www.instagram.com/oneuphandmade" target="_blank">
                                <i class="fa-brands fa-instagram fa-fw"></i>
                            </a>
                            <a href="https://www.tiktok.com/@oneuphandmade" target="_blank">
                                <i class="fa-brands fa-tiktok fa-fw"></i>
                            </a>
                        </div>
                    </span>
            </footer>
            <!-- Copyright section at bottom right of page -->
                <p class="copyright">
                    <small>Webpage Designed by Taylor Faber</small>
                </p>
    </body>

</html>