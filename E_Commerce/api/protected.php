<?php

// Include necessary libraries for JWT
require_once './../vendor/autoload.php';

use Firebase\JWT\JWT;

// Set your secret key here
$secret_key = 'Yousseff_Mohamed_1337';

// Retrieve the token from the authorization header
$headers = apache_request_headers();
$Authorization_Header_Value = isset($headers['Authorization']) ? $headers['Authorization'] : '';
$token = preg_replace('/^Bearer\s/', '', $Authorization_Header_Value);

// Validate token
if ($token) {
    // Split the token into its three parts: header, payload, and signature
    $token_parts = explode('.', $token);
    if (count($token_parts) == 3) {
        $header = base64_decode($token_parts[0]);
        $payload = base64_decode($token_parts[1]);
        $signature = base64_decode($token_parts[2]);

        // echo $header;

        // Verify the signature to ensure the token hasn't been tampered with
        // // // $expected_signature = hash_hmac('sha256', $token_parts[0] . '.' . $token_parts[1], $secret_key, true);
        // echo $signature;
        // echo "ttttttttttttttttttt";
        // echo $expected_signature;
        // // // if ($signature === $expected_signature) {

            // echo "I'm in the if condition";
            // Signature is valid, decode the payload
        $decoded_payload = json_decode($payload);

        // Access user data directly from the payload
        $username = $decoded_payload->username;
        // echo $username;


        $role = $decoded_payload->role;
        // echo $role;

        // if ($user_role = "viewer"){
        //     echo "over here";
        // }


        // Set the username & the role from the jwt as a new two cookie values.

        $name = "username_from_jwt";
        $value = $username;

        $expiry = time() + (86400 * 30); // Expiry time, here it's set to 30 days from now
        $path = "/"; // Path on the server where the cookie will be available
        $domain = ""; // Domain where the cookie will be available, leave empty for current domain
        $secure = false; // Whether the cookie will be sent only over secure connections (HTTPS)
        $httpOnly = true; // Whether the cookie will be accessible only through the HTTP protocol

        setcookie($name, $value, $expiry, $path, $domain, $secure, $httpOnly);


        $name = "role_from_jwt";
        $value = $role;
        
        $expiry = time() + (86400 * 30); // Expiry time, here it's set to 30 days from now
        $path = "/"; // Path on the server where the cookie will be available
        $domain = ""; // Domain where the cookie will be available, leave empty for current domain
        $secure = false; // Whether the cookie will be sent only over secure connections (HTTPS)
        $httpOnly = true; // Whether the cookie will be accessible only through the HTTP protocol

        setcookie($name, $value, $expiry, $path, $domain, $secure, $httpOnly);

                    
        // Authorized access, return user data
        http_response_code(200);
        echo json_encode(array("message" => "Authorized access!", "user" => $user_data, "user_role" => $user_role));
        }
    }        
//         } else {
//             // Invalid signature, unauthorized access
//             http_response_code(401);
//             echo json_encode(array("message" => "Unauthorized access. Invalid signature."));
//         }
//     } else {
//         // Invalid token format, unauthorized access
//         http_response_code(401);
//         echo json_encode(array("message" => "Unauthorized access. Invalid token format."));
//     }
// } else {
//     // No token provided
//     http_response_code(401);
//     echo json_encode(array("message" => "No token provided."));
// }


// echo "tttttttttttttttttt"


?>
