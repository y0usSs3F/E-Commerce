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




// Include the JWT library
require __DIR__ . '/vendor/autoload.php';

// Set the secret key
$secretKey = 'Yousseff_Mohamed_1337';

// Function to decode JWT token
function decodeJwtToken($jwtToken, $secretKey) {
    return \Firebase\JWT\JWT::decode($jwtToken, new \Firebase\JWT\Key($secretKey, 'HS256'));
}

// Check if JWT token is present in the request headers
$jwtToken = $_SERVER['HTTP_AUTHORIZATION'] ?? null;
if (!$jwtToken) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized - JWT token missing']);
    exit;
}

try {
    // Decode JWT token
    $decodedToken = decodeJwtToken($jwtToken, $secretKey);
    
    // Extract user data from decoded token
    $userData = (array) $decodedToken;
    
    // Check if user's role is allowed to access cart.php
    if ($userData['role'] === 'viewer') {
        // User does not have permission to access cart.php
        http_response_code(403);
        echo json_encode(['error' => 'Forbidden - Insufficient permissions']);
        exit;
    }
} catch (Exception $e) {
    // Token is invalid or expired
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized - Invalid JWT token']);
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script>

        function cancelRequest(button) {
                button.textContent = 'Canceled Successfully';
                button.style.backgroundColor = 'red';
                button.style.color = 'white';
                button.style.cursor = 'default';
            }
            
        function processPayment() {
            alert('Payment processed successfully!');
        }
        
    </script>
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
            <a  href="contact.php">Contact</a>
            <a href="signin/signin.html">Account</a>
            <a  class="active" href="cart.php"><i class="ri-shopping-bag-line"></i></a>
        </nav>

        <i class="ri-menu-3-line" id="menu-btn"></i>


    </header>
    
    <section id="contact-hero">
        <h2>#let's_talk</h2>
        <p>Leave a message. We love to hear from you!</p>
    </section>
   
   <section id="cart">
    <h2 style="text-align: center; font-size: 40px;">Cart Summary</h2>
    <div class="cart">
        <div class="cart-item">
            <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Order</button>
            <img src="img/products/f1.jpg" alt="Product 1">
            <div>
                <h3>Product 1</h3>
                <p>Price: $20.00</p>
            </div>
            <span>Quantity: 2</span>
        </div>

        <div class="cart-item">
            <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Order</button>
            <img src="img/products/f2.jpg" alt="Product 2">
            <div>
                <h3>Product 2</h3>
                <p>Price: $15.00</p>
            </div>
            <span>Quantity: 1</span>
        </div>
        <div class="cart-item">
            <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Order</button>
            <img src="img/products/f3.jpg" alt="Product 2">
            <div>
                <h3>Product 2</h3>
                <p>Price: $15.00</p>
            </div>
            <span>Quantity: 1</span>
        </div>
        <div class="cart-item">
            <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Order</button>
            <img src="img/products/f4.jpg" alt="Product 2">
            <div>
                <h3>Product 2</h3>
                <p>Price: $15.00</p>
            </div>
            <span>Quantity: 2</span>
        </div>
        <div class="cart-item">
            <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Order</button>
            <img src="img/products/f5.jpg" alt="Product 2">
            <div>
                <h3>Product 2</h3>
                <p>Price: $15.00</p>
            </div>
            <span>Quantity: 1</span>
        </div>
        

        <div class="cart-total">
            <span></span>
            <span><br>Total $115.00</span>
        </div>

        <div class="cart-total">
            <span></span>
            <button style="background-color: blue;" class="payment-button" onclick="processPayment()">Proceed to Payment</button>
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