<?php
require_once "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    try {
        $sql = "INSERT INTO employer (name, email, phone) VALUES (:name, :email, :phone)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        echo "New record created successfully";
        echo "<br><a href='index.php'>Back</a>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
