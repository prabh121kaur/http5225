<?php
if (isset($_POST['updateCity'])) {
    // Retrieve form data and the city ID from the URL query parameter
    $cityID = $_GET['id']; 
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

    // Prepare the SQL UPDATE query
    $query = "UPDATE `city` 
              SET 
                `Name` = '" . mysqli_real_escape_string($conn, $name) . "',
                `CountryCode` = '" . mysqli_real_escape_string($conn, $countryCode) . "',
                `District` = '" . mysqli_real_escape_string($conn, $district) . "',
                `Info` = '" . mysqli_real_escape_string($conn, $info) . "' 
              WHERE `ID` = '" . mysqli_real_escape_string($conn, $cityID) . "'";

    // Debugging: Output the SQL query
    echo "SQL Query: " . $query . "<br>";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        echo "City updated successfully. Redirecting...<br>";
        header("Location: ../index.php");
        exit;
    } else {
        // Display an error message if something went wrong
        echo "Error updating city: " . mysqli_error($conn);
    }
} else {
    // If form wasn't submitted, redirect to the home page
    header("Location: ../index.php");
    exit;
}
?>
