<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

// Duplicated user in the database.
if(isset($_GET['error'])) {
    $error = $_GET['error'];
    if($error == 'duplicate_entry') {
        echo '<script>alert(1)</script>';
        echo "<p style='color:red;'>Username already exist.</p>";
        echo "<p style='color:red;'>Hold a second you will be redirected to try again.</p>";
        // sleep(3);
        header("Location: signup.html");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //
    // Prevent XSS Attacks here :P
    // 

    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    // $fullname = $_POST['fullname'];

    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    // $username = $_POST['username'];

    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    // $email = $_POST['email'];

    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    // $password = $_POST['password'];

    $phonenumber = htmlspecialchars($_POST['phonenumber'], ENT_QUOTES, 'UTF-8');
    // $phonenumber = $_POST['phonenumber'];

    $role = htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8');
    // $role = $_POST['role'];


    $username = mysqli_real_escape_string($conn, $username);
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
    $password = mysqli_real_escape_string($conn, $password);


    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


    $sql = "";

    if ($role == "customer") {
        $sql = "INSERT INTO customers (fullname, username, email, password, phonenumber) VALUES (?, ?, ?, ?, ?)";
        
    } elseif ($role == "seller") {
        $sql = "INSERT INTO sellers (fullname, username, email, password, phonenumber) VALUES (?, ?, ?, ?, ?)";

    } elseif ($role == "viewer") {
        $sql = "INSERT INTO viewers (fullname, username, email, password, phonenumber) VALUES (?, ?, ?, ?, ?)";

    } else {

        echo "Invalid user role";
        exit();
    }


    // Encrypting user PII Info before inserting it into the database:

    // $encrypted_fullname = base64_encode($fullname);
    // $encrypted_username = base64_encode($username);
    // $encrypted_email = base64_encode($email);

    $key = "Yousseff_Key";

    // Encrypting user PII Info before inserting it into the database:

    $encrypted_fullname = base64_encode(openssl_encrypt($fullname, 'DES-ECB', $key, OPENSSL_RAW_DATA));
    $encrypted_username = base64_encode(openssl_encrypt($username, 'DES-ECB', $key, OPENSSL_RAW_DATA));
    $encrypted_email = base64_encode(openssl_encrypt($email, 'DES-ECB', $key, OPENSSL_RAW_DATA));

    // echo $encrypted_email;

    try{
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $encrypted_fullname, $encrypted_username, $encrypted_email, $hashedPassword, $phonenumber);
        $stmt->execute();

    } catch (mysqli_sql_exception $e) {
        // Handle the exception
        // Log the error for debugging purposes
        // Redirect the user back to the login page with an error message
        header("Location: signup.php?error=duplicate_entry");
        exit();
    }
    
    

    if ($stmt->error) {

        echo "Error: " . $stmt->error;
        exit();

    } else {

        header("Location: ../signin/signin.html");
    }
    

    $stmt->close();
}


$conn->close();
?>
