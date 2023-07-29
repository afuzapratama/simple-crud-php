<?php

//Connecting With Database PDO

$server = "localhost";
$username = "Username";
$password = "Password";
$database = "Database";

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
