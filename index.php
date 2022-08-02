<!DOCTYPE html>

<html>

    <head>
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
        <?php
                       
        ?>
    
        <!-- Shop Logo -->
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

    <!-- Logo Banner -->
        <img class="banner" src="./resources/images/banner.png" alt="Slow Fashion for littles in Fandoms you Love."> 
    
    <!-- Featured Items Section -->
        <table class="center">
            <caption><h2>Featured Products</h2></caption>
            <tr>
                <td><img src="https://goimagine.com/images/detailed/1156/1406231B-119D-421B-AEC1-443B78417827_org.jpeg" alt="product image"></td>
                <td><img src="https://goimagine.com/images/detailed/1157/3794A9A5-D255-4ADA-877B-00C17AAE585D_org.jpeg" alt="product image"></td>
                <td><img src="https://goimagine.com/images/detailed/1011/4ADC0E8C-7404-4F69-922F-EC48A6157ECF_org.jpeg" alt="product image"></td>
            </tr>
        </table>
    <hr>

    <!--Shop-->
    <section id=shop>
        <div class="catagories">
            <h3>Catagories</h3>
            <ul>
                <li>Item type</li>
                <li>Print</li>
                <li>Other</li>
            </ul>
        </div>
        <div class="gallery">
            <a href="item.php">
                <div class="item">
                    <img src="resources/images/sgromper.jpeg" alt="Studio Ghibli Dustball Romper">
                    <div class="listing">Dustball Raid Romper</div>
                </div>
            </a>

            <a href="item.php">
                <div class="item">
                    <img src="resources/images/smshorties.jpeg" alt="Sailor Moon Shorites">
                    <div class="listing">Moon Guardian Shorties</div>
                </div>
            </a>

            <a href="item.php">
                <div class="item">
                    <img src="resources/images/togepifps.jpeg" alt="Togepi Dress">
                    <div class="listing">Egg FPS Dress</div>
                </div>
            </a>

            <a href="item.php">
                <div class="item">
                    <img src="resources/images/khshirt.jpeg" alt="Kingdom Hearts Tank">
                    <div class="listing">Heart Kingdom Adventurer Armor</div>
                </div>
            </a>
        </div>
    </section>    
    <hr>

    <!--Bottom Nav-->
        <section class="bottom-nav">
                
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
        </section>
        <!-- Copyright section at bottom right of page -->
        <small>
            <p class="copyright">
                Webpage Designed by Taylor Faber
            </p>
        </small>
    </body>

</html>