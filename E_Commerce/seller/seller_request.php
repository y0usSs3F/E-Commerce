<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

session_start();

if (!isset($_SESSION['seller'])) {

    header("Location: ../signin/signin.html"); // Redirect to signin page cause he didn't signin.
    exit();

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Check if the file was uploaded without errors
    if ($_FILES['image']['error'] == 0) {

        // Upload image
        $targetDir = "../uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        
        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {

            $sql = "INSERT INTO seller_requests (name, description, price, image_path) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $description, $price, $targetFile);
            $stmt->execute();
            $stmt->close();

            echo "Request Submitted successfully :)";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Please wait for the admin approval to publish the product, Thanks!";

        } else {

            echo "Error uploading image.";

        }
    } else {

        echo "Error: " . $_FILES['image']['error'];

    }
} else {

    echo "Invalid request.";

}

// Close the database connection
$conn->close();

?>
