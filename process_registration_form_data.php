<?php
$servername = "localhost";
$username = "root";
$password = "magento123";
$dbname = "p2_registration";

//Get values pass from form in registration.php file
$name = $_POST ['name'];
$nid = $_POST['nid'];
$age = $_POST['age'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO registration (name, nid,age) VALUES ('$name','$nid','$age')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
