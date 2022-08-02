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

        <!-- Contact Form -->
            <!--php-->
                <?php /*
                    // define variables and set to empty values
                    $emailErr = $requestErr = "";
                    $email = $request = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                        } else {
                            $email = test_input($_POST["email"]);
                        }
                            
                        if (empty($_POST["request"])) {
                            $requestErr = "Please include a few details about the item you are looking for.";
                        } else {
                            $request = test_input($_POST["request"]);
                        }
                        make some type of and connection to activate submit
                    }

                    function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                    } */
                ?>

            <h2>Contact Form</h2>
                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="on">
                        <label for="fname">First Name</label><br>
                        <input class="custom" type="text" id="fname" name="firstname" placeholder="Your name..">
                        <br>
                        <label for="lname">Last Name</label><br>
                        <input class="custom" type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <br>
                        <label for="email">Email</label><br>
                        <input class="custom" type="email" id="email" email="email" placeholder="Your email address.." required>
                        <br>
                        <label for="order">Custom Order Request</label><br>
                        <textarea class="custom" id="order" name="request" placeholder="Include some details about the item you are looking for and we will contact you.." style="height:200px" required></textarea>
                        <br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            <!--php-->
                <?php /*
                    submit code "<h2>Thank You for reaching out, we will contact you.</h2>";
                    */
                ?>
        
        <!--Social details/buttons-->
            <section class="joinus">
                <div class="fb">
                    <h2>Join the VIP Facebook Group</h2>
                    <p>Stuff</p>
                </div>
                <div class="insta">
                    <h2>Check out Instagram for updates</h2>
                    <p>Stuff</p>
                </div>
            </section>

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