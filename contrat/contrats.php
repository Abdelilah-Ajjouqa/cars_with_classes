<?php
    require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['duration'])) {

        $startDate = $_POST['startDate'];
        $duration = $_POST['duration'];
        $endDate = $_POST['endDate'];
        $sql = "INSERT INTO contrat (startDate, endDate, duration) VALUES ('$startDate', '$endDate', '$duration')";

        if ($conn->query($sql)) {
            // Insertion successful
        } else {
            echo "Error: " . $conn->connect_error;
        }
        header("Location: ./contrat.php");
        exit();
    }
}