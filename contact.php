<!DOCTYPE html>

<html>

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Roboto:wght@300&display=swap" rel="stylesheet">

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
                        <!--<img class="clear-icon" src="./resources/images/clear.png" alt="search"> -->
                        <img class="search-icon" src="./resources/images/search.png" alt="search">
                    </div>
                    <!--Shopping Cart-->
                    <div class="cart" role="button" aria-label="Cart">    
                    </div>
                </div>
            </nav>
        <br>
     <!-- Contact -->
     <h2>Contact Form</h2>

     <div class="container">
        <form action="/action_page.php" method="post" autocomplete="on">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        
            <label for="email">Email</label>
            <input type="email" id="email" email="email" placeholder="Your email address.." required>
        
            <label for="order">Custom Order Request</label>
            <textarea id="order" name="request" 
                placeholder="Include some details about the item you are looking for and we will contact you.." 
                style="height:200px" required>
            </textarea>
        
            <input type="submit" value="Submit">
        </form>
     </div>
    
    <!--Bottom Nav-->
       <div class="bottom-nav">
              
            <ul class="bottom-nav">
                        <li class="bottom-nav"><a href="index.html">Home</a></li>
                        <li class="bottom-nav"><a href="index.html#shop">Shop</a></li>
                        <li class="bottom-nav"><a href="about.html">About</a></li>
                        <li class="bottom-nav"><a href="contact.html">Contact</a></li>
            </ul>
        <!-- Copyright section with date at bottom right of page -->
            <small><p class="copyright">
                Webpage Designed by Taylor Faber
            </p>
        </small>
        </div>
    </body>

</html>