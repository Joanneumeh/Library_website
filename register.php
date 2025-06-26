<?php
// Registering a new user and adding their information to the database

    include 'connection_db.php';


    $send_username = $_POST['Username'];
    $send_password = $_POST['Password'];
    $send_firstname = $_POST['Firstname'];
    $send_lastname = $_POST['Lastname'];
    $send_address_line_1 = $_POST['Address_Line_1'];    
    $send_address_line_2 = $_POST['Address_Line_2']; 
    $send_city = $_POST['City'];
    $send_telephone = $_POST['Telephone'];
    $send_lastname = $_POST['Lastname'];
    $send_mobile = $_POST['Mobile'];


    $sql = "INSERT INTO assignment.users (Username, Password, Firstname, Lastname, Address_Line_1, Address_Line_2, City, Telephone, Mobile) VALUES ('$send_username', '$send_password', '$send_firstname', '$send_lastname', '$send_address_line_1', '$send_address_line_2', '$send_city', '$send_telephone', '$send_mobile')";

    if ($conn -> query($sql) === TRUE) {
        //echo "Registered Successfully";
        header('location:index.html');
    }
    else {
        echo "Error" . $sql . "<br>" . $conn -> error;
    }

    $conn-> close();
?>