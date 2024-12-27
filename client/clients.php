<?php
    require '../config-db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql = "INSERT INTO client (name, address, phone) VALUES ('$name', '$address', '$phone')";

        if ($conn->query($sql)) {
        } else {
            echo "Error: " . $conn->connect_error;
        }
        header("Location: ./utilisateur.php");
        exit();
    }
}