<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require './../vendor/autoload.php'; // Path to your JWT library

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$secret_key = 'Yousseff_Mohamed_1337';

// session_start();
$username = $_SESSION['username'];
$role = $_SESSION['role'];

echo $username;

function generateJWTToken($username, $role, $secret_key) {
    $payload = array(
        'iss' => 'Andrew_Tate',
        'iat' => time(),
        'username' => $username,
        'role' => $role,
        'exp' => time() + (600*600) 
    );

    $jwt_token = JWT::encode($payload, $secret_key, 'HS256');

    return $jwt_token;
}

function getUsernameFromJWT($jwt_token, $secret_key) {
    try {

        $decoded = JWT::decode($jwt_token, new Key($secret_key, 'HS256'));

        $username = $decoded->username;

        return $username;
    } catch (Exception $e) {
        return "Unexpected Error.";
    }
}

function getRoleFromJWT($jwt_token, $secret_key) {
    try {

        $decoded = JWT::decode($jwt_token, new Key($secret_key, 'HS256'));

        $role = $decoded->role;

        return $role;
    } catch (Exception $e) {
        return "Unexpected Error.";
    }
}

//
// Generate JWT Token for the user and set it as a cookie value.
//

$jwt_token = generateJWTToken($username, $role, $secret_key);
setcookie('jwt_token', $jwt_token, time() + (600*600), '/'); 


//
// Get the username from the JWT and set it as a cookie value.
//

$username = getUsernameFromJWT($jwt_token, $secret_key); 
setcookie('username_from_jwt_token', $username, time() + (600*600), '/'); 


//
// Get the role from the JWT and set it as a cookie value.
//

$role = getRoleFromJWT($jwt_token, $secret_key); 
setcookie('role_from_jwt_token', $role, time() + (600*600), '/'); 
























// // Start the session
// session_start();

// // Include necessary libraries for JWT
// require_once './../vendor/autoload.php';

// use Firebase\JWT\JWT;

// // Set your secret key here
// $secret_key = 'Yousseff_Mohamed_1337';
// $issued_at = time();
// $expiration_time = $issued_at + 36003600; // token expiration time

// // Check if username and role are set in the session
// if(isset($_SESSION['username']) && isset($_SESSION['role'])) {
//     $user_data = array(
//         'username' => $_SESSION['username'],
//         'role' => $_SESSION['role']
//     );

//     // Generate JWT token
//     $payload = array(
//         'iss' => 'Andrew_Tate',
//         'iat' => $issued_at,
//         'exp' => $expiration_time,
//         'username' => $_SESSION['username'],
//         'role' => $_SESSION['role']
//     );

//     $jwt = JWT::encode($payload, $secret_key, 'HS256');
//     $_SESSION['jwt'] = $jwt;

//     // echo json_encode(
//     //     array(
//     //         "message" => "Token generated successfully.",
//     //         "token" => $jwt
//     //     )
//     // );

// } else {
//     echo json_encode(array("error" => "Username or role not set in session."));
// }






?>
