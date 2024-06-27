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
    <title>Our Blogs</title>
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
            <a class="active" href="blog.php">Blog</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="signin/signin.html">Account</a>
            <a href="cart.php"><i class="ri-shopping-bag-line"></i></a>
        </nav>

        <i class="ri-menu-3-line" id="menu-btn"></i>


    </header>
    <!-- header end -->
    <!-- hero section start -->
    <section id="blog-hero">
        <h2>#readmore</h2>
        <p>Real all case studies about our products!</p>
    </section>
    <!-- hero section end  -->
    
    <section class="blog-container" id="blog">
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b1.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 1</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde fuga sed vitae assumenda odio expedita tempora laudantium voluptatum.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b2.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 2</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b3.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 3</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b4.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 4</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>

        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b5.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 5</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b6.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 6</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
        <div class="blog-row">
          
            <div class="blog-column">
                <img src="img/blog/b7.jpg" alt="Blog 1" class="blog-image">
              
            </div>
            <div class="blog-column">
               
                <h2 class="blog-title">Blog Title 7</h2>
                <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ratione sed, consequatur fugit autem minima maxime odio corporis! Esse adipisci excepturi dolorum placeat est quam facilis vero recusandae ratione, explicabo iusto deleniti nihil. Commodi hic, quae animi, quidem et laboriosam maxime adipisci maiores nulla odit iste laborum repellat numquam unde.</p>
                <a href="#">Continue Reading</a>
            </div>

          

        </div>
    </section>

    
    
   
    <section id="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="ri-arrow-right-line"></i></a>
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