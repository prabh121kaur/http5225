<?php
if (isset($_POST['add'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $countryCode = $_POST['countryCode'];
    $district = $_POST['district'];
    $info = $_POST['info'];

    // Include the connection to the database
    require('../reusables/connect.php');

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully<br>";
    }

    // Prepare the SQL INSERT query
    $query = "INSERT INTO `city` (
                `Name`, 
                `CountryCode`, 
                `District`, 
                `Info`
              ) VALUES (
                '" . mysqli_real_escape_string($conn, $name) . "',
                '" . mysqli_real_escape_string($conn, $countryCode) . "',
                '" . mysqli_real_escape_string($conn, $district) . "',
                '" . mysqli_real_escape_string($conn, $info) . "'
              )";

    // Debugging: Output the SQL query
    echo "SQL Query: " . $query . "<br>";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "New city added successfully. Redirecting...<br>";
        header("Location: ../index.php");
        exit; 
    } else {
        echo "Error adding city: " . mysqli_error($conn) . "<br>";
    }
} else {
    header("Location: ../index.php");
    exit;
}
?>
