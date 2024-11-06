<?php

if (isset($_POST['deleteCity'])) {
    // Retrieve the ID of the city to delete
    $cityID = $_POST['id'];

    // Include the connection to the database
    require('../reusables/connect.php');

    // SQL query to delete the city by its ID
    $query = "DELETE FROM city WHERE `ID` = '" . mysqli_real_escape_string($conn, $cityID) . "'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Redirect to the index page or a success page
        header("Location: ../index.php");
        exit;
    } else {
        // Display an error message if something went wrong
        echo "There was an error deleting the city: " . mysqli_error($conn);
    }
}
?>
