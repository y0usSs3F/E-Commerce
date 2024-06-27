<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

session_start();

if (!isset($_SESSION['admin'])) {

    header("Location: signin.html");
    exit();

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['approve'])) {

        $requestId = $_POST['approve'];
        approveSellerRequest($requestId);

    } elseif (isset($_POST['delete'])) {

        $requestId = $_POST['delete'];
        deleteSellerRequest($requestId);

    }
}


function approveSellerRequest($requestId) {

    global $conn;

    // ADD the product to the website.

    $sql = "DELETE FROM seller_requests WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $requestId);
    $stmt->execute();
    $stmt->close();
    header("Location: products.php"); 
    exit();

}


function deleteSellerRequest($requestId) {

    global $conn;
    $sql = "DELETE FROM seller_requests WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $requestId);
    $stmt->execute();
    $stmt->close();
    header("Location: products.php"); 
    exit();

}