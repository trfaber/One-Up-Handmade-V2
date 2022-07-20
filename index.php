<!DOCTYPE html>

<html>

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <!-- Shop Logo -->
            <nav aria-label="Main">
                <img class="logo" src="./resources/images/logo.jpg" alt="One Up Handmade Logo">
                    <div class="top-nav">
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
                    </div>
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
        <p id=shop>Shop here</p>
        
    <!--Bottom Nav-->
        <div class="bottom-nav">
                
            <ul class="bottom-nav">
                        <li class="bottom-nav"><a href="index.html">Home</a></li>
                        <li class="bottom-nav"><a href="#shop">Shop</a></li>
                        <li class="bottom-nav"><a href="about.html">About</a></li>
                        <li class="bottom-nav"><a href="contact.html">Contact</a></li>
            </ul>
            <div>
                <span>
                    <i class="fa fa-facebook-f" style="font-size:24px;color:#e2b619;"></i>
                    <i class="fa fa-instagram" style="font-size:24px;color:#e2b619;"></i>
                </span>
                <!-- Copyright section with date at bottom right of page -->
            <small><p class="copyright">
                Webpage Designed by Taylor Faber
            </p></small>
            </div>
        </div>
    </body>

</html>