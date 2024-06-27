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
    <title>Contact Us</title>
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
            <a href="about.php">About</a>
            <a class="active" href="contact.php">Contact</a>
            <a href="signin/signin.html">Account</a>
            <a href="cart.php"><i class="ri-shopping-bag-line"></i></a>
        </nav>

        <i class="ri-menu-3-line" id="menu-btn"></i>


    </header>
    <!-- header end -->
    <!-- hero section start -->
    <section id="contact-hero">
        <h2>#let's_talk</h2>
        <p>Leave a message. We love to hear from you!</p>
    </section>
    <!-- hero section end  -->
    
   <section id="contact">
    <div class="contact-row">
        <div class="contact-left">
            <h4>GET IN TOUCH</h4>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h4>Head Office</h4>
            <p><i class="ri-map-2-line"></i>Indrapuri Sector C Bhopal</p>
            <p><i class="ri-mail-line"></i>Contact@gmail.com</p>
            <p><i class="ri-phone-line"></i>+919474899400</p>
            <p><i class="ri-time-line"></i>Monday to Saturday 9:00 AM</p>
        </div>
        <div class="contact-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.759022499106!2d77.46261482440728!3d23.25185455773481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c4203e1c28add%3A0xce85ece223ab006b!2sIndrapuri%20C%20sector%2C%20Sector%20C%2C%20Indrapuri%2C%20Bhopal%2C%20Madhya%20Pradesh%20462022!5e0!3m2!1sen!2sin!4v1699985488380!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
   </section>
    
   <section id="form">
    
    <div class="form-row">
        <div class="form-left">
            <h4>LEAVE A MESSAGE</h4>
            <h2>We love to hear from you</h2>
            <form action="#">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="E-Mail" required>
                <input type="text" placeholder="Subject" required>
                <textarea id="message" cols="30" rows="5" placeholder="Your Message" readonly></textarea>
                <button>Submit</button>
            </form>
        </div>
        <div class="form-right">
            <div class="person">
                <img src="./img/people/1.png" alt="">
                <div class="info">
                    <h4>John Doe</h4>
                    <p>Senior Marketing Manager</p>
                    <p>Phone:+297389434</p>
                    <p>Email:contact@example.com</p>
                </div>
            </div>
            <div class="person">
                <img src="./img/people/2.png" alt="">
                <div class="info">
                    <h4>Wiliam Jack</h4>
                    <p>Senior Marketing</p>
                    <p>Phone:+297389434</p>
                    <p>Email:contact@example.com</p>
                </div>
            </div>
            <div class="person">
                <img src="./img/people/3.png" alt="">
                <div class="info">
                    <h4>Emma Stone</h4>
                    <p>Senior Marketing Manager</p>
                    <p>Phone:+297389434</p>
                    <p>Email:contact@example.com</p>
                </div>
            </div>
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