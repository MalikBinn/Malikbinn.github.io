<?php

//Abdulmalek Almuhana
//CPSC 349
//Midterm 1 - Question 2

$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";
// this section is to create the connection 
$conn = mysqli_connect($servername, $username, $password, $database);


// in here we check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//the connection is successful
echo "Connected successfully";
mysqli_close($conn);
?>