<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

session_start();

if (!isset($_SESSION['seller'])) {

    header("Location: ../signin/signin.html"); // Redirect to signin page cause he didn't signin.
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller's Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .custom-button {

            margin: 0;
            padding: 10px 15px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            /* Add the following line to move the button to the right */
            margin-left: auto;
            display: block; /* Ensures the button takes the full width */

        }

      </style>

    <script>

        function cancelRequest(button) {
                button.textContent = 'Canceled Successfully';
                button.style.backgroundColor = 'red';
                button.style.color = 'white';
                button.style.cursor = 'default'; // Optional: Change cursor to default when canceled
            }

    </script>

</head>
<body>
    
    <section id="cart">
        <h2 style="text-align: center; font-size: 40px;">Seller's Dashboard</h2>
        <br>
        <br>
        <button class="custom-button" onclick="window.location.href='seller_request.html'">Request Upload Product</button>
        <br>
        <br>
        <div class="cart">
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f1.jpg" alt="Product 1">
                <div>
                    <h3>Product 1</h3>
                    <p>Price: $20.00</p>
                </div>
                <span>Quantity: 2</span>
            </div>
    
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f2.jpg" alt="Product 2">
                <div>
                    <h3>Product 2</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f3.jpg" alt="Product 2">
                <div>
                    <h3>Product 3</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f4.jpg" alt="Product 2">
                <div>
                    <h3>Product 4</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f5.jpg" alt="Product 2">
                <div>
                    <h3>Product 5</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f6.jpg" alt="Product 2">
                <div>
                    <h3>Product 6</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
            <div class="cart-item">
                <button style="padding: 10px 15px; background-color: #4CAF50; color: white; font-size: 16px; cursor: pointer;" onclick="cancelRequest(this)">Cancel Request</button>
                <img src="../img/products/f7.jpg" alt="Product 2">
                <div>
                    <h3>Product 7</h3>
                    <p>Price: $15.00</p>
                </div>
                <span>Quantity: 1</span>
            </div>
    
            <div class="cart-total">
                <span>Total:</span>
                <span>$130.00</span>
            </div>
        </div>
       </section>
    
</body>
</html>
