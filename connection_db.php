<?php
// Connecting Database to website

$conn = mysqli_connect("localhost", "root", "", "assignment");
    if ($conn-> connect_error)
    {
        die("Connection failed:" . $conn-> connection_error);
    }
?>