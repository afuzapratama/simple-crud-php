<?php

//Connecting With Database PDO

$server = "localhost";
$username = "root";
$password = "Lonteq@123";
$database = "crud";

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
