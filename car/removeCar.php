<?php
require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['carId'])) {
    $carId = test_input($_POST['carId']);
    $sql = "DELETE FROM cars WHERE carId = '$carId'";

    if (mysqli_query($conn, $sql)) {
        // Deletion successful
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: voitures.php");
    exit();
}

function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>