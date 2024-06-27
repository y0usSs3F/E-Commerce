<?php
// Start the session
session_start();

// Set the URL of the protected file (index.php in this case)
$url = "http://localhost/E_Commerce/api/protected.php";

// Set the JWT token obtained after successful authentication
$token = $_SESSION['jwt'];

// echo "Token: " . $token . "\n\n\n";

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $token",
));

// Execute the request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Display response (protected content)
echo $response;
// echo $_SESSION['testtest'];

?>
