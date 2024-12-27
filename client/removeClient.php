<?php
    require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['clientId'])) {

    $clientId = test_input($_POST['clientId']);
    $sql = "DELETE FROM client WHERE clientId = '$clientId'";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: ./utilisateur.php");
    exit();
}

function test_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}