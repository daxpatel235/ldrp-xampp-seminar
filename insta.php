<?php
// Create a connection with MySQL database
// Parameters: hostname, username, password, database
$connection = mysqli_connect("localhost", "root", "", "gg_db");

// Check if connection failed
if(!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Check if form is submitted using POST method
if($_POST) {
    // Storing form input values into variables
    $name_data  = $_POST['txt1'];
    $email_data = $_POST['txt2'];
    $mob_data   = $_POST['txt3'];
    $pass_data  = $_POST['txt4'];

    // Insert query to store values into "insta" table
    // query: removed unnecessary () and fixed variable syntax
    $q = mysqli_query($connection, "INSERT INTO insta (name_data, email_data, mob_data, pass_data)
    VALUES ('$name_data', '$email_data', '$mob_data', '$pass_data')");

    // If query is successful
    if($q) {
        echo "<script>alert('Record Added');</script>";
    } else {
        echo "<script>alert('Error in Query: " . mysqli_error($connection) . "');</script>";
    }
}
?>
