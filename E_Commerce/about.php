<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start the session
session_start();

// Check if the user is not logged in (session variable is not set)
if (!isset($_SESSION['customer']) && !isset($_SESSION['seller']) && !isset($_SESSION['viewer'])) {
    // Redirect to the signin.html page
    header("Location: ./signin/signin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!-- header start -->
    <header id="header">
        <img src="./img/logo.png" alt="logo" class="logo">

        <nav id="navbar">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a  href="blog.php">Blog</a>
            <a class="active" href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="signin/signin.html">Account</a>
            <a href="cart.php"><i class="ri-shopping-bag-line"></i></a>
        </nav>

        <i class="ri-menu-3-line" id="menu-btn"></i>


    </header>
    <!-- header end -->
    <!-- hero section start -->
    <section id="about-hero">
        <h2>#Know Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, id.!</p>
    </section>
    <!-- hero section end  -->
    
   <section id="about">
   <div class="about-content">
    <div class="about-left">
        <img src="./img/about/a6.jpg" alt="">
    </div>
    <div class="about-right">
        <h2>Who we are ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eius obcaecati nulla similique unde distinctio eligendi reiciendis quasi architecto voluptas quidem, esse enim voluptatem vel molestias porro odit? Beatae, totam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident optio voluptas enim dicta at, adipisci ut facilis a accusamus facere totam ab aspernatur modi minus? Obcaecati rem amet voluptates eaque!</p>
        <abbr title="" style="font-size: 20px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, beatae dicta quaerat enim minima.
        </abbr>
        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create Stunning images with as much or as little control as you like thanks to a choice of Basic and creative modes.</marquee>
    </div>
   </div>
   </section>
    
   <section id="app">
    <h2>Download Our <a href="#" style="text-decoration: underline;">App</a></h2>
    <div class="video-container">
        <video width="100%" height="500px"  muted autoplay loop>
            <source src="./img/about/1.mp4" type="video/mp4" />
           </video>
    </div>
   </section>
   <section id="feature">
    <div id="feature-container" class="grid-container">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h3>Free Shopping</h3>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h3>Online Order</h3>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h3>Save Money</h3>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h3>Promotions</h3>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h3>Happy Sell</h3>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h3>F24/7 Support</h3>
        </div>
    </div>
</section>
    
   
   
   
    <section id="newsletter">
       <div class="container">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>official offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter email address">
            <button>Sign Up</button>
        </div>
       </div>
    </section>
    

      <footer>
        <div class="container">
            <div class="col">
            <img src="img/logo.png" alt="logo" width="150px">
            <b>Contact</b>
           <p><strong>Address:</strong>562 Wellington Road, Street</p>
           <p><strong>Phone:</strong>+0193749844</p>
           <p><strong>Hours:</strong>10:00 - 18:00 Mon - Sat</p>
                <b>Follow Us</b>
                <div class="follow">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                    <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"><i class="ri-pinterest-fill"></i></a>
                    <a href="#"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
            <div class="col">
               <h4>About</h4>
               <a href="#">About Us</a>
               <a href="#">Delivery Information</a>
               <a href="#">Privacy Policy</a>
               <a href="#">Terms & Conditions</a>
               <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col">
                <h4>Install App</h4>
                <a href="#">From App Store or Google Play</a>
                <div class="app">
                    <img src="./img/pay/app.jpg" alt="">
                    <img src="./img/pay/play.jpg" alt="">
                </div>
                <a href="#">Secured Payment Gateways</a>
                
                <img src="img/pay/pay.png" alt="" width="200px">
                
            </div>
        </div>
        <p class="lo-footer">&copy; 2023, Dangerous Team </p>
      </footer>
    
    <script src="script.js"></script>
</body>

</html>