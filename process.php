<?php
$servername = "localhost";
$username = "root";
$password = "magento123";
$dbname = "p2_registration";

//Get values pass from form in login.php file
$uname = $_POST ['uname'];
$passwd = $_POST['passwd'];

//to prevent mysql injection
//$uname = stripslashes($uname);
//$passwd = stripslashes($passwd);
//$uname = new mysqli($uname);
//$passwd = new mysqli($password);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO login (username, password) VALUES ('$uname','$passwd')";

if ($conn->query($sql) === TRUE) {
    echo "Login Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 //Query the database for user
// $result = mysqli_query("select * from users where username = '$username' and password = '$password'")
//               or die ("Failed to query database" .mysql_error());
// $row = mysqli_fetch_array($result);
// if ($row['username'] == $username && $row['password'] == $password ){
//     echo "Login Success!! Welcome" .$row['username'];
// } else {
//     echo "Failed to login!!";
// }
