<?php
require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['marque']) && isset($_POST['model']) && isset($_POST['year'])) {

        $marque = $_POST['marque'];
        $year = $_POST['year'];
        $model = $_POST['model'];
        $sql = "INSERT INTO cars (marque, model, year) VALUES ('$marque', '$model', '$year')";

        if ($conn->query($sql)) {
        } else {
            echo "Error: " . $conn->connect_error;
        }
        header("Location: voitures.php");
        exit();
    }
}