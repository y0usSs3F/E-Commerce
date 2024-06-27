<?php
$servername = "localhost";
$username = "joe";
$password = "pass";
$dbname = "E-Commerce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>