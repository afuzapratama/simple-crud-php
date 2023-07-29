<?php

if (isset($_GET["id"])) {
    require_once "connection.php";
    $id = $_GET["id"];
    try {
        $sql = "DELETE FROM employer WHERE id_employer = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "Record deleted successfully";
        echo "<br><a href='index.php'>Back</a>";
        // you can also use header("Location: index.php");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    header("Location: index.php");
}
