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
    <title>Shop Now</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

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
                <input type="text" id="search-input" placeholder="Type your search..." onkeydown="handleKeyDown(event)">
                <button id="search-button" onclick="performSearch()">Search</button>
            </div>
            <a href="index.php">Home</a>
            <a class="active" href="shop.php">Shop</a>
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
    <section id="shop-hero">
        
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>
    <!-- hero section end  -->
    

    <!-- feature product section start -->
    <section id="feature-product">
       
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

    <section id="feature-product">
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