<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

require './../vendor/autoload.php'; // Path to your JWT library


// function generateJwtToken($payload, $secretKey) {

//     $Serialized_JWT = JWT::encode($payload, $secretKey, 'HS256');
//     // echo "Serialized JWT: " . $Serialized_JWT . "\n\n";
//     return $Serialized_JWT;

// }

// function decodeJwtToken($jwtToken, $secretKey) {

//     $Derialized_JWT = JWT::decode($Serialized_JWT, new Key($secretKey, 'HS256'));
//     // echo "Derialized JWT:\n";
//     // print_r($Derialized_JWT);

// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    //
    // Prevent XSS Attacks here :P
    //


    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    // $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
    // $username = $_POST['username'];

    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    // $password = $_POST['password'];

    $role = htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8');
    // $role = $_POST['role'];


    $key = "Yousseff_Key";

    // Encrypting user PII Info before checking if it's true in the database.

    // $encrypted_fullname = base64_encode(openssl_encrypt($fullname, 'DES-ECB', $key, OPENSSL_RAW_DATA));
    $encrypted_username = base64_encode(openssl_encrypt($username, 'DES-ECB', $key, OPENSSL_RAW_DATA));
    // $encrypted_email = base64_encode(openssl_encrypt($email, 'DES-ECB', $key, OPENSSL_RAW_DATA));


    // // JWT // 

    // $secretKey = 'Yousseff_Mohamed_1337';

    // $payload = [
    //     'username' => $username,
    //     'role' => $role
    // ];

    // // JWT // 


    
    $sql = "";
    
    if ($role == "customer") {

        $sql = "SELECT * FROM customers WHERE username=?";

    } elseif ($role == "seller") {

        $sql = "SELECT * FROM sellers WHERE username=?";

    } elseif ($role == "viewer") {

        $sql = "SELECT * FROM viewers WHERE username=?";

    } else {

        echo "Invalid user role";
        exit();

    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $encrypted_username);
    $stmt->execute();
    $result = $stmt->get_result();


    if (!$result) {

        echo "Error: " . $stmt->error;
        exit();
    }
    
    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];


        if (password_verify($password, $storedPassword)) {

                session_start();
                // $JWT_Token = generateJwtToken($payload, $secretKey);
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['encrypted_username'] = $encrypted_username;

                require_once('./../api/generate_JWT.php');


                if ($role == 'seller') {

                    $_SESSION['seller'] = true;                                                    
                    header("Location: ../seller/seller_control.php");
                    exit();

                } elseif ($role === 'customer') {

                    $_SESSION['customer'] = true;
                    header("Location: ../index.php");
                    exit();

                } elseif ($role == 'viewer') {

                    $_SESSION['viewer'] = true;
                    header("Location: ../index.php");
                    exit();

                } else {

                    echo "Please choose a role.";
                    exit();

                }

        } else {

            echo "Login failed. Check your username and password.";
        }
    } else {

        echo "Login failed. Check your username and password.";
    }

    $stmt->close();
}

$conn->close();

?>

