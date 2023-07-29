<?php
require_once "connection.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    try {
        $sql = "UPDATE employer SET name = :name, email = :email, phone = :phone WHERE id_employer = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        echo "Record updated successfully";
        echo "<br><a href='index.php'>Back</a>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    header("Location: index.php");
}
