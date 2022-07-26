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

    <!-- Item -->
        <section class="item">
            <div class="image">
                <h3>Dustball Raid Romper</h3>
                <img src="resources/images/smshorties.jpeg" alt="Sailor Moon Shorites">
            </div>
            <form>
            </form>
        
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
        <!-- Copyright section with date at bottom right of page -->
        <small>
            <p class="copyright">
                Webpage Designed by Taylor Faber
            </p>
        </small>
    </body>

</html>