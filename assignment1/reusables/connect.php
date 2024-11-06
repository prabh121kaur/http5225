<?php
$connect = mysqli_connect(
    'localhost', 
    'root', 
    '', // Write your password here
    'http5225' // Write your database name here
);

if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
