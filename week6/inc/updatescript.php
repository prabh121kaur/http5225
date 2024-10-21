<?php
  // Check if the form was submitted
  if (isset($_POST['updateSchool'])) {
    // Retrieve form data and the schoolID from the URL query parameter
    $schoolID = $_POST['schoolID']; // Hidden input for schoolID
    $schoolName = $_POST['schoolName'];
    $schoolType = $_POST['schoolType'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Include the connection to the database
    require('../reusables/connect.php');

    // Prepare the SQL UPDATE query with a WHERE clause to update only the specific record
    $query = "UPDATE `public_school_contact_list_may2024_en` 
              SET 
                `School Name` = '" . mysqli_real_escape_string($connect, $schoolName) . "',
                `School Type` = '" . mysqli_real_escape_string($connect, $schoolType) . "',
                `Phone` = '" . mysqli_real_escape_string($connect, $phone) . "',
                `Email` = '" . mysqli_real_escape_string($connect, $email) . "'
              WHERE `id` = '" . mysqli_real_escape_string($connect, $schoolID) . "'";  // Ensure that only one row is updated

    // Execute the query
    $result = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($result) {
      // Redirect to the index page or success page after update
      header("Location: ../index.php");
      exit; // Make sure to exit after redirection
    } else {
      // Display an error message if something went wrong
      echo "There was an error updating the school: " . mysqli_error($connect);
    }
  } else {
    // If form wasn't submitted, redirect to the home page
    header("Location: ../index.php");
    exit;
  }
?>