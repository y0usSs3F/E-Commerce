<?php

// SESSION // 

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

if (!isset($_SESSION['customer']) && !isset($_SESSION['seller']) && !isset($_SESSION['viewer'])) {
    
    header("Location: ./signin/signin.html");
    exit();
}


// JWT // 

require __DIR__ . '/vendor/autoload.php'; // Path to Composer autoload file.

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$secretKey = 'Yousseff_Mohamed_1337';

$payload = [
    'id' => '1',
    'username' => 'john_doe',
    'role' => 'customer'
];

$Serialized_JWT = JWT::encode($payload, $secretKey, 'HS256');
// echo "Serialized JWT: " . $Serialized_JWT . "\n\n";

$Derialized_JWT = JWT::decode($Serialized_JWT, new Key($secretKey, 'HS256'));
// echo "Derialized JWT:\n";
// print_r($Derialized_JWT);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara - Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/dist/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 20px;
        }
    
        #search-container {
          text-align: center;
        }
    
        #search-input {
          padding: 12px;
          width: 250px;
          font-size: 16px;
        }
    
        #search-button {
          padding: 12px;
          font-size: 16px;
          cursor: pointer;
          background-color: #4CAF50;
          color: white;
          border: none;
        }
    
        #search-results {
          margin-top: 20px;
        }
      </style>

    <script>

        function performSearch() {

        var searchQuery = document.getElementById('search-input').value;
        alert('Searching for: ' + searchQuery);
    
    }
    
        function handleKeyDown(event) {

            if (event.key === 'Enter') {

                event.preventDefault();
                performSearch();

        }

    }
    </script>

</head>

<body>
    <!-- header start -->
    <header id="header">
        <img src="./img/logo.png" alt="logo" class="logo">

        <nav id="navbar">
            <div id="search-container">
                <?php

                // SESSION // 

                // error_reporting(E_ALL);
                // ini_set('display_errors', '1');

                // // session_start();

                $key = "Yousseff_Key";

                // echo $_SESSION['encrypted_username'];

                if (isset($_SESSION['encrypted_username'])) {
                    $encrypted_username = $_SESSION['encrypted_username'];
                    
                    if (!empty($encrypted_username)) {

                        $decrypted_username = openssl_decrypt(base64_decode($encrypted_username), 'DES-ECB', $key, OPENSSL_RAW_DATA);
                        
                        if (!empty(trim($decrypted_username))) {

                            echo "<h1>Welcome Mr." . "$decrypted_username</h1>";

                        } else {

                            echo "<h1>Error: Decrypted username is empty.</h1>";

                        }
                    } else {

                        echo "<h1>Error: Encrypted username is empty.</h1>";
                    }
                } else {

                    echo "<h1>Error: Encrypted username is not set in session.</h1>";
                }
                                                
                ?>
                <input type="text" id="search-input" placeholder="Type your search..." onkeydown="handleKeyDown(event)">
                <button id="search-button" onclick="performSearch()">Search</button>
            </div>
            <a class="active" href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="blog.php">Blog</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="signin/signin.html">Account</a>
            <a href="cart.php"><i class="ri-shopping-bag-line"></i></a>
        </nav>

        <i class="ri-menu-3-line" id="menu-btn"></i>

    </header>
    <!-- header end -->
    
    <!-- hero section start -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Super value deals <br><span> On all products</span></h1>
                <p>Save more with coupons & up to 70% off!</p>
                <img src="img/button.png" alt="">
                <a href="#shop-now" class="cta-button">Shop Now</a>
            </div>
            <div class="hero-image">
                
            </div>
        </div>
    </section>
    <!-- hero section end  -->
    <!-- feature section start  -->
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

    <!-- feature section end  -->

    <!-- feature product section start -->
    <section id="feature-product">
        <h1>Featured Products</h1>
        <p>Summer Collection New Modern Design</p>
        <div class="product-container">
            <div class="product-box">
                <img src="img/products/f1.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f2.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f3.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f4.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f5.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f6.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f7.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f8.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- feature product section end -->

    <section id="banner">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All t-shirts & Accessories</h2>
        <button>Explore More</button>
    </section>

    <section id="feature-product">
        <h1>New Arrivals</h1>
        <p>Summer Collection New Modern Design</p>
        <div class="product-container">
            <div class="product-box">
                <img src="img/products/n1.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/n2.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/n3.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/n4.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/n5.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/n6.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f7.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="product-box">
                <img src="img/products/f8.jpg" alt="product">
                <div class="des">
                    <span>addidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="pro-lower">
                        <h4>$78</h4>
                        <a href="#">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section id="sm-banner">
        <div class="banner-box b1">
            <h4>Crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button>Learn More</button>
        </div>
        <div class="banner-box b2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button>Collection</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner3-box b3-1">
            <h2>SEASON SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner3-box b3-2">
            <h2>NEW FOOTWARE </h2>
            <h3>Spring / Summer 2023</h3>
        </div>
        <div class="banner3-box b3-3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
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