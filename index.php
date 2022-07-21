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
        <!--<php?
            
        ?>-->
    
        <!-- Shop Logo -->
            <nav aria-label="Main">
                <img class="logo" src="./resources/images/logo.jpg" alt="One Up Handmade Logo">
                    <section class="top-nav">
                    <!--Nav Links-->
                        <ul class="top-nav">
                            <li class="top-nav"><a href="index.php">Home</a></li>
                            <li class="top-nav"><a href="index.php#shop">Shop</a></li>
                            <li class="top-nav"><a href="about.php">About</a></li>
                            <li class="top-nav"><a href="contact.php">Contact</a></li>
                        </ul>
                        <!--Search bar-->
                        <div class="wrapper">
                            <input class="search" type="text" placeholder="Find Cool Stuff" >
                <!-- <img class="clear-icon" src="./resources/images/clear.png" alt="search"> -->
                            <img class="search-icon" src="./resources/images/search.png" alt="search">
                        </div>
                    <!--Shopping Cart-->
                        <div class="cart" role="button" aria-label="Cart">   
                        </div>
                    </section>
            </nav>
        <br>

    <!-- Logo Banner -->
        <img class="banner" src="./resources/images/banner.png" alt="Slow Fashion for littles in Fandoms you Love."> 
    
    <!-- Featured Items Section -->
        <table class="center">
            <caption><h2>Featured Products</h2></caption>
            <tr>
                <td><img src="https://goimagine.com/images/detailed/1156/1406231B-119D-421B-AEC1-443B78417827_org.jpeg"></td>
                <td><img src="https://goimagine.com/images/detailed/1157/3794A9A5-D255-4ADA-877B-00C17AAE585D_org.jpeg"></td>
                <td><img src="https://goimagine.com/images/detailed/1011/4ADC0E8C-7404-4F69-922F-EC48A6157ECF_org.jpeg"></td>
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
            <div class="item">
            <a target="_blank" href="item.php">
                <img src="resources/images/sgromper.jpeg" alt="Studio Ghibli Dustball Romper" width="600" height="400">
            </a>
            <div class="listing">Dustball Raid Romper</div>
            </div>

            <div class="item">
            <a target="_blank" href="item.php">
                <img src="resources/images/smshorties.jpeg" alt="Sailor Moon Shorites" width="600" height="400">
            </a>
            <div class="listing">Moon Guardian Shorties</div>
            </div>

            <div class="item">
            <a target="_blank" href="item.php">
                <img src="resources/images/togepifps.jpeg" alt="Togepi Dress" width="600" height="400">
            </a>
            <div class="listing">Egg FPS Dress</div>
            </div>

            <div class="item">
            <a target="_blank" href="item.php">
                <img src="resources/images/khshirt.jpeg" alt="Kingdom Hearts Tank" width="600" height="400">
            </a>
            <div class="listing">Heart Kingdom Adventurer Armor</div>
            </div>
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
            <div>
            <!-- Social Icons -->
                <i class="fa-brands fa-facebook fa-fw" style="font-size:2em;color:#4dac19;"></i>
                <i class="fa-brands fa-instagram fa-fw" style="font-size:2em;color:#4dac19;"></i>
                <i class="fa-brands fa-tiktok fa-fw" style="font-size:2em;color:#4dac19;"></i>
            </div>
        </section>
        <!-- Copyright section at bottom right of page -->
        <small>
            <p class="copyright">
                Webpage Designed by Taylor Faber
            </p>
        </small>
    </body>

</html>